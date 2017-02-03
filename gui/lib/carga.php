<?php
return function(){
$tpath = getcwd();
	
	
$paths = explode('/gui',$tpath);
$path_servicos = $paths[0]. '/servicos/';
$path_etc =$paths[0]. '/etc/';
	
 
	
require_once 'vendor/autoload.php';
	
$carrega = function($id)use($path_servicos,$path_etc ){
        $caminhos=array(
                'lib'=>$path_servicos.'lib/',
				'cookies'=>$path_etc,
                'lib.configs'=>$path_servicos.'lib/configs/',
                'lib.bd'=>$path_servicos.'lib/bd/',
                'lib.configs.individual'=>$path_servicos.'lib/configs/individual/',
        );
        return (isset($caminhos[$id]))?$caminhos[$id]:false;
};

require_once($carrega('lib').'global.php') ;
Eglobal::getStance()->setPath($carrega);
$sessao = require($carrega('lib').'conf_sistema.php');
 
$desloga = function()use($sessao){$sessao->desLoga();};
$limpa_sessao = require($carrega('lib').'limpa_cache.php');
$limpa_sessao();
$token = require($carrega('lib').'gera_token.php');
$geraID = require($carrega('lib').'gera_id.php');
 
$checa_token = require($carrega('lib').'confirma_token.php');
	
$path = Eglobal::getStance()->getPath();
$dir='lib.bd';

$conBanco =  require($carrega('lib').'connection_banco.php');

$banco = require($path($dir).'fabricaConexao_bdSeat.php');
	
Eglobal::getStance()->setSessao($sessao)->setFToken($token)->setCToken($checa_token)->setGeraID($geraID)->setConBanco($conBanco)->setbanco($banco);
	
 
Eglobal::getStance()->setServico($desloga,'desloga');
	
};
