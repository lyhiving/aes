<?php
namespace lyhiving\aes;

class aes
{
    public $AES_KEY, $AES_IV, $method;

    public function __construct($key, $iv, $method='aes-128-cbc')
    {
        $this->setKey($key);
        $this->setIV($iv);
        $this->method = $method;
    }

    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    public function setKey($key)
    {
        $this->AES_KEY = $key;
        return $this;
    }

    public function setIV($key)
    {
        $this->AES_IV = $key;
        return $this;
    }

    public function decode($str)
    {
        $decrypted = openssl_decrypt(base64_decode($str), $this->method, $this->AES_KEY, OPENSSL_RAW_DATA, $this->AES_IV);

        return $decrypted;
    }

    public function encode($plain_text)
    {
        $encrypted_data = openssl_encrypt($plain_text, $this->method, $this->AES_KEY, OPENSSL_RAW_DATA, $this->AES_IV);

        return base64_encode($encrypted_data);
    }
}
