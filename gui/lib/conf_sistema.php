<?php
$ppath = Eglobal::getStance()->getPath();
$tpath = $ppath('lib');
$dist = 'sistema_local';
$configurador = require($tpath.'config.php');
$sessao = $configurador($dist);
return $sessao;