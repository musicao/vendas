<?php

class Login {

    private $sk;
    private $si;
    private $passEncrypt;
    private $passDigitado;

    public function __construct($password) {
        $this->sk = self::gerarSalt();
        $this->si = self::gerarSalt();
        $this->passDigitado = $password;
        $this->passEncrypt = $this->encrypt_decrypt('encrypt', $password, $this->getSk(),$this->getSi());
    }

    

    /*
     * Gerar um salt para encriptar a senha do usário
     *  */

    private function gerarSalt() {
        return base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
    }

    

    /*
     * Fazer as encriptações e chamar verificação de senha
     * Dados que estao gravados na table usuarios
     *  */

//    public function isBValidSenha($senhaGravada, $salt) {
//        return self::gerarHash($this->getPassDigitado(), $salt) == $senhaGravada ? true : false;
//    }
        public function isBValidSenha($pass,$sk,$si) {
        return $this->passDigitado == $this->encrypt_decrypt('decrypt', $pass,$sk,$si)? true : false;
    }

    function encrypt_decrypt($action, $string,$secret_key,$secret_iv) {
        $output = false;

        $encrypt_method = "AES-256-CBC";
       
        // hash
        $key = hash('sha256', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);

        if ($action == 'encrypt') {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        } else if ($action == 'decrypt') {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }

        return $output;
    }

    public function getSk() {
        return $this->sk;
    }

    public function getSi() {
        return $this->si;
    }

    public function getPassEncrypt() {
        return $this->passEncrypt;
    }

    public function getPassDigitado() {
        return $this->passDigitado;
    }

    public function setSk($sk) {
        $this->sk = $sk;
        return $this;
    }

    public function setSi($si) {
        $this->si = $si;
        return $this;
    }

    public function setPassEncrypt($passEncrypt) {
        $this->passEncrypt = $passEncrypt;
        return $this;
    }

    public function setPassDigitado($passDigitado) {
        $this->passDigitado = $passDigitado;
        return $this;
    }





}
