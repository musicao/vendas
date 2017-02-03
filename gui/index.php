<?php


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;


$carrega = require('lib/carga.php');



$actual_link = \explode('/',$_SERVER['REQUEST_URI']);
$dir_template = $actual_link[0].'/template/';
$dir_base = $actual_link[0].'/';



$carrega();

$loader =  new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array(
	'cache' => 'template/cache','auto_reload' => true ,
));


$twig->addGlobal('css_dir',$dir_base.'template/assets/css');
$twig->addGlobal('base_dir',$dir_base);
$twig->addGlobal('img_dir',$dir_base.'template/assets/img');
$twig->addGlobal('js_dir',$dir_base.'template/assets/js');






$ttoken = Eglobal::getStance()->getToken();
$ctoken = Eglobal::getStance()->getCToken();
$geraId = Eglobal::getStance()->getGeraID();
$connBanco = Eglobal::getStance()->getConBanco();
$banco = Eglobal::getStance()->getBanco();


$app = new Silex\Application();

$app['debug'] = true;

$app->register(new Silex\Provider\SessionServiceProvider());

#Habilitar apenas se quiser usr o dbal/docrine

#$dbConfig = parse_ini_file('banco/config.ini', false);
/*$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
	'dbs.options' => array (
		'mysql_write' => array(
			'driver'    => 'pdo_mysql',
			'host'      => $dbConfig['hostname'],
			'dbname'    => $dbConfig['database'],
			'user'      => $dbConfig['username'],
			'password'  => $dbConfig['password'],
			'charset'   => 'utf8',
		),
		'mysql_read' => array(
			'driver'    => 'pdo_mysql',
			'host'      => $dbConfig['hostread'],
			'dbname'    => $dbConfig['databaseread'],
			'user'      => $dbConfig['usernameread'],
			'password'  => $dbConfig['passwordread'],
			'charset'   => 'utf8',
		)
        
	),
));*/


$app->get('/', function()use($twig,$app){
	 
	return $twig->render('index.twig');
	
});


$app->get('/lucas', function()use($twig,$app){
	
	$data['data'] = 'macaco';
	$retorno = new Response(json_encode($data));
	$retorno->headers->set('Content-Type','application/json; charset=utf-8');
	return $retorno;
	
});


$app->before(function($app) use ($twig){
	/*$usessao = Eglobal::getStance()->getSessao();
	
	if(!$usessao->logado )
	{
		if(!strpos($app->getRequestUri(),'login')) { return new RedirectResponse('/login'); }
	}
	
	
	
	$twig->addGlobal('usuario_nome',$usessao->usuario_nome );
	$twig->addGlobal('usuario_perfil',$usessao->usuario_perfil);
	$twig->addGlobal('usuario_matricula',$usessao->usuario_matricula);
	$twig->addGlobal('usuario_tipo_id',$usessao->usuario_tipo_id );
	$usessao->aclMaster = array("1","2");
	
	$usessao->sistema_local = 'sistema_local';
	*/
	
	
});


$app->mount('/login',require  'Controllers/LoginController.php' );


$app->run();