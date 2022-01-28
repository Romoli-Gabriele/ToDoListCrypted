<?php
use ParagonIE\EasyRSA\KeyPair;
use ParagonIE\EasyRSA\EasyRSA;

class Crypt
{
    private $keyPair;
    private $secretKey;
    public $publicKey;

    function __construct()
    {
        $this->keyPair = KeyPair::generateKeyPair(4096);
        $this->secretKey  = $this->keyPair->getPrivateKey();
        $this->publicKey = $this->keyPair->getPublicKey();
    }

    public function encrypt($data)
    {
        return EasyRSA::encrypt($data, $this->publicKey);
    }

    function decrypt($encrypted)
    {
        return EasyRSA::decrypt($encrypted, $this->secretKey);
    }
}
