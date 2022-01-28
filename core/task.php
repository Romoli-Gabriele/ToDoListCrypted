<?php
require_once('blowfish.php');
class task
{
    public $id;
    public $descrizione;
    public $terminata;
    
/*
    public function __construct($id, $desc)
   {
    $this->id=$id;   
    $this -> descrizione= Crypt::encrypt($desc,$this->key);
    $this -> terminata = 'false';
   }
    */
    public function id()
    {
        return $this->id;
    }
    public function descrizione(){
        
        return openssl_private_decrypt($this->descrizione, $decrypted, $this->privKey);
    }

}
