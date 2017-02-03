<?php


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;


require_once __DIR__.'/vendor/autoload.php';

error_reporting(E_ALL);
ini_set("display_errors", 1);

$loader =  new Twig_Loader_Filesystem( __DIR__ .'/template');
 
 
$twig = new Twig_Environment($loader, array(
	'cache' => 'template/cache','auto_reload' => true ,
));



$app = new Silex\Application();

$app['debug'] = true;

$app->register(new Silex\Provider\SessionServiceProvider());


$app->get('/', function()use($twig,$app){
	 
	return $twig->render('index.twig', array('the' => 'variables', 'go' => 'here'));
	
});


$app->get('/lucas', function()use($twig,$app){
	
	$data['data'] = 'macaco';
	$retorno = new Response(json_encode($data));
	$retorno->headers->set('Content-Type','application/json; charset=utf-8');
	return $retorno;
	
});


$app->run();