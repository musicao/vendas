<?php
$ppath = Eglobal::getStance()->getPath();
$tpath=$ppath('lib');
require_once($tpath.'configurador.php');
$funcao = function($id){
$id_ip = $_SERVER["REMOTE_ADDR"];
$id_ag = $_SERVER["HTTP_USER_AGENT"];
$id_ac = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
$id_arp = $_SERVER["REMOTE_PORT"];
$tok = md5($id_ip.$id_ag);
	
	 
$session = configurator::getStance(array('id'=>$id,'id_ip'=>$id_ip,'id_ag'=>$id_ag,'id_ac'=>$id_ac,'id_arp'=>$id_arp,'token'=>$tok));
 
	return $session;
};
return $funcao;
