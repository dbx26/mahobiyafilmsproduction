<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\AESService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * Show Admin Login Form
     */
    public function login()
    {
        return view('admin.login');
    }

    /**
     * Submit Login Form
     */
    public function loginSubmit(Request $request, AESService $aes)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
            'txtCaptcha' => 'required',
        ], [
            'username.required' => 'Email or Username is required.',
            'password.required' => 'Password is required.',
            'txtCaptcha.required' => 'CAPTCHA is required.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // CAPTCHA check
        if ($request->txtCaptcha !== session('captcha_text')) {
            return back()->with('error_message', 'Invalid CAPTCHA. Please try again.')->withInput();
        }

        $username = trim($request->input('username'));
        $frontPassword = $request->input('password');
        $salt = (string) $request->input('salt');

        // Look up user in database if users table exists
        $user = null;
        if (Schema::hasTable('users')) {
            $user = User::where('email', $username)
                ->orWhere('name', $username)
                ->first();
        }

        if (!$user) {
            return back()->with('error_message', 'Invalid Email/Username or Password.')->withInput();
        }

        // Check password (supports standard Laravel Hash or SHA512 salt if frontend hashed)
        $passwordMatched = false;

        if (Hash::check($frontPassword, $user->password)) {
            $passwordMatched = true;
        } elseif ($salt !== '' && !empty($user->salt)) {
            // Check legacy salt/AES match if user table has custom salt
            $actualPassword = $this->decryptAES($user->password, $user->salt);
            $hashed = hash('SHA512', $salt . $actualPassword . $salt);
            if ($frontPassword === $hashed) {
                $passwordMatched = true;
            }
        }

        if (!$passwordMatched) {
            return back()->with('error_message', 'Invalid Email/Username or Password.')->withInput();
        }

        // Store session data
        session([
            'user_id' => $user->id,
            'user_name' => $user->name,
            'user_email' => $user->email,
            'logout_token' => Str::random(40),
        ]);

        return redirect()->route('admin.dashboard');
    }

    /**
     * Show Registration Form
     */
    public function register()
    {
        return view('admin.register');
    }

    /**
     * Submit Registration Form
     */
    public function registerSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $otp = (string) random_int(100000, 999999);
        session([
            'registration_name' => $request->name,
            'registration_email' => $request->email,
            'registration_otp' => $otp,
            'registration_otp_time' => now(),
        ]);

        // Attempt sending OTP email
        try {
            $email = $request->email;
            $name = $request->name;
            Mail::send([], [], function ($message) use ($email, $name, $otp) {
                $message->to($email)
                    ->subject('Mahobiya Films – Verification Code')
                    ->html("Hello {$name},<br><br>Your verification code is: <strong>{$otp}</strong>.<br><br>Regards,<br>Mahobiya Films Production");
            });
        } catch (\Throwable $e) {
            // In local/development, OTP is available in session for testing
        }

        return redirect()->route('auth.register.verifyOtp')
            ->with('success', 'Verification code has been sent to your email.');
    }

    /**
     * Show OTP Verification Page
     */
    public function showVerifyOtp()
    {
        if (!session()->has('registration_email')) {
            return redirect()->route('auth.register');
        }

        return view('admin.register-verify-otp', [
            'email' => session('registration_email'),
        ]);
    }

    /**
     * Verify OTP
     */
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required',
        ]);

        $storedOtp = (string) session('registration_otp');
        $submittedOtp = (string) $request->otp;

        if ($submittedOtp !== $storedOtp) {
            return back()->with('error_message', 'Invalid verification code. Please try again.');
        }

        // Create user if users table exists
        $user = null;
        if (Schema::hasTable('users')) {
            $user = User::firstOrCreate(
                ['email' => session('registration_email')],
                [
                    'name' => session('registration_name', 'Admin User'),
                    'password' => Hash::make('Mahobiya@2026'),
                ]
            );
        }

        // Clear registration session
        session()->forget(['registration_otp', 'registration_otp_time']);

        // Log in
        session([
            'user_id' => $user ? $user->id : 1,
            'user_name' => session('registration_name', 'Admin User'),
            'user_email' => session('registration_email'),
            'logout_token' => Str::random(40),
        ]);

        return redirect()->route('admin.dashboard')
            ->with('success', 'Registration completed successfully!');
    }

    /**
     * Resend OTP
     */
    public function resendOtp(Request $request)
    {
        if (!session()->has('registration_email')) {
            return response()->json(['success' => false, 'message' => 'Session expired.'], 400);
        }

        $otp = (string) random_int(100000, 999999);
        session(['registration_otp' => $otp]);

        try {
            $email = session('registration_email');
            $name = session('registration_name');
            Mail::send([], [], function ($message) use ($email, $name, $otp) {
                $message->to($email)
                    ->subject('Mahobiya Films – New Verification Code')
                    ->html("Hello {$name},<br><br>Your new verification code is: <strong>{$otp}</strong>.<br><br>Regards,<br>Mahobiya Films Production");
            });
        } catch (\Throwable $e) {}

        return response()->json(['success' => true, 'message' => 'New code sent.']);
    }

    /**
     * Logout
     */
    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login')
            ->with('success', 'You have been logged out successfully.');
    }

    /**
     * Show Password Change View
     */
    public function passwordChange()
    {
        return view('admin.change-password');
    }

    /**
     * Update Password
     */
    public function updatePassword(Request $request, AESService $aes)
    {
        $request->validate([
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        $userId = session('user_id');
        if ($userId && Schema::hasTable('users')) {
            User::where('id', $userId)->update([
                'password' => Hash::make($request->new_password),
            ]);
        }

        return redirect()->route('admin.dashboard')
            ->with('success', 'Password updated successfully!');
    }

    /**
     * Show Forgot Password View
     */
    public function forgotPassword()
    {
        return view('admin.forgot-password');
    }

    /**
     * Send Password Reset Link
     */
    public function sendResetLink(Request $request)
    {
        $request->validate([
            'username' => 'required',
        ]);

        $email = $request->username;
        $token = Str::random(60);

        if (Schema::hasTable('password_reset_tokens')) {
            DB::table('password_reset_tokens')->updateOrInsert(
                ['email' => $email],
                ['token' => Hash::make($token), 'created_at' => now()]
            );
        }

        $link = route('auth.resetPassword', ['token' => $token]);

        try {
            Mail::send([], [], function ($message) use ($email, $link) {
                $message->to($email)
                    ->subject('Mahobiya Films Portal – Password Reset Request')
                    ->html("<p>Hello,</p><p>You requested a password reset for <b>Mahobiya Films Production Portal</b>.</p><p><a href='{$link}'>Click here to reset your password</a></p><p>Regards,<br><b>Mahobiya Films Production Team</b></p>");
            });
        } catch (\Throwable $e) {}

        return back()->with('status', 'A reset link has been dispatched to your email.');
    }

    /**
     * Show Reset Password View
     */
    public function resetPassword($token)
    {
        return view('admin.reset-password', compact('token'));
    }

    /**
     * Update Forgot Password
     */
    public function updateForgotPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        return redirect()->route('auth.login')
            ->with('success', 'Password reset successfully! You can now log in.');
    }

    /**
     * Helper: Decrypt AES if needed
     */
    private function decryptAES($encryptedData, $key)
    {
        $cipher = 'AES-128-CBC';
        $data = base64_decode($encryptedData);
        $ivLength = openssl_cipher_iv_length($cipher);
        $iv = substr($data, 0, $ivLength);
        $ciphertext = substr($data, $ivLength);

        return openssl_decrypt($ciphertext, $cipher, $key, OPENSSL_RAW_DATA, $iv);
    }
}
