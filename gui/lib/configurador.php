<?php

class Session{
	private $sessao,$path,$visitante,$container;
	
	public function __construct(array $item,$visitante)
	{
		$this->sessao=$this->geraSessao($item['id_ip'],$item['id_ag'],$item['id_ac']);
		$this->setItem('token',$item['token']);
		$this->visitante = $visitante;
		$this->container = function($acao)use($item){
			return $acao->sessao_vazia($item['id_ip'],$item['id_ag'],$item['id_ac']);
		};
	}
	public function desLoga()
	{
		$deslog = $this->container;
		return $this->sessao = $deslog($this);
	}
	public function getGeral()
	{
		return $this->visitante;
	}
	private function geraSessao($ip,$ag,$ac){
		$ppath = Eglobal::getStance()->getPath();
		$tpath =$ppath('lib.configs');
		$this->path=$tpath.'individual/'.md5($ip.trim(strtolower($ag)));
		if(file_exists($this->path))
		{
			$temp = json_decode(file_get_contents($this->path),true);
			$d_time = $temp['inicio'];
			$tempo = time();
			$t_tempo = $d_time + 3600;
			if(($t_tempo - time()) > 0) return $temp;
			if($temp['validacao'] > 3)
			{
				return $this->sessao_vazia($ip,$ag,$ac);
			}
			$temp['inicio'] = time();
			$temp['validacao'] = $temp['validacao'] + 1;
			$this->grava($temp);
			return $temp;
		}
		return $this->sessao_vazia($ip,$ag,$ac);
		
	}
	private function sessao_vazia($ip,$ag,$ac){
		$temp = array('validacao'=>0,'inicio'=>time(),'agent'=>$ag,'acept'=>$ac,'ip' =>$ip);
		$this->grava($temp);
		return $temp;
	}
	private function grava($item){
		file_put_contents($this->path,json_encode($item));
	}
	public function __get($dado)
	{
		return $this->getItem($dado);
	}
	public function __set($dado,$valor)
	{
		return $this->setItem($dado,$valor);
	}
	public function getItem($item)
	{
		$index = strtolower(trim($item));
		if(isset($this->sessao[$index]))
		{
			return $this->sessao[$index];
		}
		elseif($this->visitante->getItem($index)){
			return $this->visitante->getItem($index);
		}
		
	}
	
	public function setItem($item,$valor)
	{
		$index = strtolower(trim($item));
		$this->sessao[$index] = $valor;
		$this->grava($this->sessao);
	}
	public function getUss($uss,$pass)
	{
		$this->sessao +=getUss::traz_dado($uss,$pass);
		$this->grava($this->sessao);
	}
};

class configurator{
	private static $stance;
	private $_p_session;
	private $_sessao=null;
	private $id = null;
	public static function getStance(array $item)
	{
		if(!isset(self::$stance[$item['id']])) self::$stance[$item['id']] = new self($item['id']);
		$temp = self::$stance[$item['id']];
		return $temp->getSessao($item);
		
	}
	private function __construct($root)
	{
		$this->id = $root;
		$this->_sessao= $this->loadConfig($root);
	}
	private function loadConfig($id)
	{
		/*$ppath = Eglobal::getStance()->getPath();
		$tpath =$ppath('lib.configs');
		$temp = json_decode(file_get_contents($tpath.strtolower(trim($id)).'.config'),true);
		return $temp;*/
	}
	private function getSessao(array $item)
	{
		$id = md5(trim($item['id_ip']).trim(strtolower($item['id_ag'])));
		if(!isset($this->_p_session[$id])) $this->_p_session[$id] = new Session($item,$this);
		return $this->_p_session[$id];
	}
	public function getItem($item)
	{
		$index = strtolower(trim($item));
		
		if(isset($this->_sessao[$index]))
		{
			return $this->_sessao[$index];
		}
		
	}
	
};
