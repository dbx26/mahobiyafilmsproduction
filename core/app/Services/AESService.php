<?php

namespace App\Services;

class AESService
{
    /**
     * Create a new class instance.
     */
    private string $cipher = 'AES-256-CBC';
    private string $key;

    public function __construct()
    {
        // $this->key = env('AES_SECRET_KEY');
         $this->key = '7ed049e344f73f399ba1f';
    }

   public function encrypt(string $plaintext): string
    {
        $ivLength = openssl_cipher_iv_length($this->cipher);
        $iv = random_bytes($ivLength); // Always 16 bytes for AES-256-CBC

        $encrypted = openssl_encrypt($plaintext, $this->cipher, $this->key, OPENSSL_RAW_DATA, $iv);

        // Return base64-encoded IV + ciphertext
        return base64_encode($iv . $encrypted);
    }

    public function decrypt(string $encrypted): ?string
    {
        $ivLength = openssl_cipher_iv_length($this->cipher);

        $decoded = base64_decode($encrypted, true);
        if ($decoded === false || strlen($decoded) <= $ivLength) {
            return null; // Invalid or corrupted input
        }

        $iv = substr($decoded, 0, $ivLength);
        $ciphertext = substr($decoded, $ivLength);

        return openssl_decrypt($ciphertext, $this->cipher, $this->key, OPENSSL_RAW_DATA, $iv);
    }
}
