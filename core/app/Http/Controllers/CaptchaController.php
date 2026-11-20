<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CaptchaController extends Controller
{
    public function generateCaptcha()
    {
        // CAPTCHA Settings
        $width = 150;
        $height = 60;
        $length = 6;
        $font_size = 20;
        $font_path = public_path('admin-theme/assets/Arial.ttf'); // Ensure this font exists
        $text_color = [255, 0, 0]; // Red
        $bg_color = [255, 255, 255]; // White

        // Generate Random Text
        $characters = 'abcdefghjkmnpqrstuvwxyz23456789';
        $captcha_text = substr(str_shuffle($characters), 0, $length);
        Session::put('captcha_text', $captcha_text);

        // Create Image
        $image = imagecreatetruecolor($width, $height);
        $bg_color = imagecolorallocate($image, ...$bg_color);
        $text_color = imagecolorallocate($image, ...$text_color);

        // Fill Background
        imagefilledrectangle($image, 0, 0, $width, $height, $bg_color);

        // Add Noise (Random Dots)
        for ($i = 0; $i < 500; $i++) {
            $noise_color = imagecolorallocate($image, rand(150, 255), rand(150, 255), rand(150, 255));
            imagesetpixel($image, rand(0, $width), rand(0, $height), $noise_color);
        }

        // Add Noise (Random Lines)
        for ($i = 0; $i < 5; $i++) {
            $line_color = imagecolorallocate($image, rand(100, 200), rand(100, 200), rand(100, 200));
            imageline($image, rand(0, $width), rand(0, $height), rand(0, $width), rand(0, $height), $line_color);
        }

        // Add Text with Random Rotation
        imagettftext($image, $font_size, rand(-15, 15), 30, 45, $text_color, $font_path, $captcha_text);

        // Output Image
        header("Content-type: image/png");
        imagepng($image);
        imagedestroy($image);
    }

}
