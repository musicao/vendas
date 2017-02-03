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

$mysql=function ($banco,$config)
{
	$host = $config->host;
	$user = $config->user;
    $pass = $config->pass;
    $porta= $config->porta_banco;
    $dsn='mysql:host='.$host.';dbname='.$banco.';port='.$porta;
    $bancoativo= new PDO($dsn,$user,$pass);
    $bancoativo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bancoativo->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);
    return $bancoativo;

};

return function($distinc,$conf) use($mysql) {return $mysql($distinc,$conf);};
