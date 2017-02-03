<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of fabricaConexao_bdSeat
 *
 * @author isaque
 */

$mysql=function ($config)
{
	
	 
	$host = $config['host'];
	$user = $config['user'];
    $pass = $config['pass'];
    $porta= $config['porta'];
	
	
	try {
		$dsn = 'mysql:host=' . $host . ';dbname=' . $config['banco'] . ';port=' . $porta;
		$bancoativo = new PDO($dsn, $user, $pass);
		$bancoativo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$bancoativo-> exec("SET CHARACTER SET utf8");
		$bancoativo-> exec("set names utf8");
	}catch(PDOException $ex) {
		echo $ex->getMessage();
		die;
	}
	 
    return $bancoativo;

};

return function($conf) use($mysql) {return $mysql($conf);};
