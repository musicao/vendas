<?php
class Eglobal{
private $path,$sessao=array(),$ftoken,$ctoken,$servicos=array();
private static $stance;

public static function getStance(){
    if(!self::$stance) self::$stance = new self();
    return  self::$stance;
}
    private function __construct()
    {}
    public function setPath($path){
    $this->path = $path;
    return $this; 
    }
    public function getPath(){
    return $this->path;
    }
    public function setSessao($sessao){
    $this->sessao=$sessao;
    return $this;
    }
    public function getSessao()
    {
		return $this->sessao;
		}
    public function setFToken($token)
    {
    $this->ftoken = $token;
    return $this;
    }
    public function getToken(){
		  
    return $this->ftoken;
    }
    public function setCToken($token)
    {
        $this->ctoken = $token;
        return $this;
        }
    public function getCToken()
    {
        return $this->ctoken;
        }
    public function setServico(callable $func,$id)
    {
        $this->servicos[$id]=$func;
        return $this;
    }
    public function getServico($id){
        return (isset($this->servicos[$id]))?$this->servicos[$id]:false;
    }

}
