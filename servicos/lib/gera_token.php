<?php
return function($id_tok){
	$ppath = Eglobal::getStance()->getPath();
	$tpath = $ppath('lib');
	$cpath = $ppath('lib.configs');	
    $config =  require($tpath.'conf_sistema.php');
    $conf = require($cpath.'tokens.config');
    $token = $conf($id_tok);
	 
    return md5($token.$config->token);
    };
