<?php

return function($id_tok){
	$ppath = Eglobal::getStance()->getPath();
	$tpath = $ppath('lib');
	$cpath = $ppath('lib.configs');
    $config = require($tpath.'conf_sistema.php');
    $conf = require($cpath.'tokens.config');
    $token = $conf($id_tok);
    if(strlen(trim($token)) < 15) return false;
    $tok = (isset($_GET['token']) and strlen($_GET['token']) > 10)?$_GET['token']:((isset($_POST['token']) and strlen($_POST['token']) > 10)?$_POST['token']:$_COOKIE['token']);
    $uss_token = $config->token;
    if(strlen(trim($uss_token)) < 15) return false;
    if($tok == md5($token.$uss_token)) return true;
    return false;
};
