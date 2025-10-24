<?php

namespace App\Services;

use CodeIgniter\Encryption\Encryption;

class IdentityService
{
    protected $encrypter;

    public function __construct()
    {
        $this->encrypter = \Config\Services::encrypter();
    }

    // Şifreleme
    public function encryptIdentity(string $plain): string
    {
        return base64_encode($this->encrypter->encrypt($plain));
    }

    // Çözme
    public function decryptIdentity(string $cipher): string
    {
        return $this->encrypter->decrypt(base64_decode($cipher));
    }
}
