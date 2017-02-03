<?php

namespace filtro;

class filtrosFactory {
private $validadores=array('cpf'=>array('recurso'=>'validadores/validadoresCpf.php','classe'=>'\\filtro\\validadores\\validadoresCpf'),'nb'=>array('recurso'=> 'validadores/validadoresNb.php','classe'=>'\\filtro\\validadores\\validadoresNb'),'pis'=>array('recurso'=> 'validadores/validadoresPis.php','classe'=>'\\filtro\\validadores\\validadoresPis'),'cnpj'=>array('recurso'=> 'validadores/validadoresCnpj.php','classe'=>'\\filtro\\validadores\\validadoresCnpj'),);
private $validadores_alias=array('cpf'=>array('cpf','cadastro pessoa fisica'),'pis'=>array('nit','pasep','pis',),'nb'=>array('nb','beneficio','numero de beneficio','numero do beneficio',),'cnpj'=>array('cnpj'));
private $filtros=array('filtro',);
public function getValidador($tipo=null)
{
if($tipo){	
$tipo=trim(strtolower($tipo));
if($this->validadores_alias[$tipo])
{
require_once($this->validadores[trim(strtolower($tipo))]['recurso']);
$classe=$this->validadores[trim(strtolower($tipo))]['classe'];
}

else{
foreach($this->validadores_alias as $key=>$value)
{
	if(in_array(trim(strtolower($tipo)),$value))
			{
				require_once($this->validadores[$key]['recurso']);
				$classe=$this->validadores[$key]['classe'];
				$tipo=$key;
				break;
			}
			
	}	
}
if(!$classe)throw new \RuntimeException("nao existe o tipo de validador ".$tipo);
$obj = new $classe;
$agregado= array($tipo=>$obj );
}
else {
	foreach($this->validadores as $key=>$value)
	{
		require_once($value['recurso']);
		$classe=$value['classe'];
		$agregado[$key]=new $classe;
	}
}
return $agregado;
}	
}

?>
