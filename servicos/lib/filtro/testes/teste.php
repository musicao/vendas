<?php
 error_reporting(E_ERROR);
//ini_set("display_errors", 1);
require_once '../validaEntrada.php';
$array_true=array(
		array('29676821870','cpf'),
		array('12099364852','pis'),
		array('120.-9;9;3-64-85-2','pis'),
		array('29-67;?682?18?70','cpf'),
		array('1228178361','nb'),
		array('122.817.83-61','nb'),
);
$array_false=array(
		array('29676821870','nb'),
		array('12099364852','cpf'),
		array('120.-9;9;3-64-85-2','cpf'),
		array('29-67;?682?18?70','pis'),
		array('1228178361','cpf'),
);
foreach($array_true as $k=>$v)
{
		
	$temp =\filtro\validaEntrada::validaNum($v[0]);
	echo $v[1] ,'$$!@', $temp[0]," id ".$temp[0].'  corretamente identificado atraves do numero '.$temp[1],"\n <br>";

}
foreach($array_false as $key=>$value)
{

	$tempe =\filtro\validaEntrada::validaNum($value[0]);
	echo $value[1],'$$!@', $tempe[0]," id ".$tempe[0].' corretamente falhado  atraves do numero '.$tempe[1]."\n <br>";
}




$nberr=array();




	$nb = require 'stub/novosnbsstub.php';
			foreach($nb as $nit)
{
	try{
	$bool=filtro\validaEntrada::validaNum($nit,'nb');
	}
	//$this->assertTrue($bool);
catch (filtro\validaNumException $err)
	{
		$nberr[]=$nit;
	}

}
echo "\n\n\n",implode(',',$nberr);