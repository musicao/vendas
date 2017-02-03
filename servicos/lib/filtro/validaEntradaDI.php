<?php
namespace filtro;
require_once('validaEntrada.php');
return function($tipo=null)
{
	$tipos_permitidos = array(
	'pis','nb','cpf','cnpj'					
			);
		$auto_discover=false;	
		if(is_null($tipo))$auto_discover=true;
		if(!$auto_discover and !$tipos_permitidos[trim(strtolower($tipo))]) throw new \RuntimeException("o tipo a ser validado precisa fazer parte desta lista ".implode(", ",$tipos_permitidos),2121);
	return function($dado) use($tipo){
		return validaEntrada::validaNum($dado,$tipo);
	};
};