<?php

namespace filtro;
class validaNumDupException extends \RuntimeException{
	
}
class validaNumException extends \RuntimeException{

}
class validaEntrada {
	private static $carregador;
	public function __construct()
	{
		
	}
	public static function validaNum($dado,$tipo=null)
	{
		require_once('filtrosFactory.php');
		if(!self::$carregador) self::$carregador= new filtrosFactory();
		$validador = self::$carregador->getValidador($tipo);
		$dado = preg_replace('#[^0-9]+#','',$dado);
		$resultado=array();
		foreach($validador as $k=>$v)
		{
			if($v->_is($dado)) $resultado[$k]=$dado; 
			}
		if(count($resultado) > 1 ) throw new validaNumDupException("dado casa com mais de uma estrutura ".implode(',',array_keys($resultado)). "para o dado $dado");
		if(count($resultado) == 0 ) return false;//throw new validaNumException("dado $dado nao casa com nenhuma das extruturas ".implode(',',array_keys($validador)));
		if(count($resultado) == 1 ) return array(key($resultado),$dado);
		throw new \RuntimeException("FALHA NO VALIDANUM");
	}
}

?>