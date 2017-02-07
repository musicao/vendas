<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
 


$login = $app['controllers_factory'];

 

$login->post('/logar', function(Request $request)use($twig,$ttoken,$ctoken,$app,$connBanco,$banco){
	
	$dados =  json_decode($request->getContent());
	$data = null;
	$usessao = Eglobal::getStance()->getSessao();
	$bolGravarDados = false;
	 
		
		$identificador = filter_var($dados->login, FILTER_SANITIZE_NUMBER_INT);
		$password = filter_var($dados->password, FILTER_SANITIZE_STRING);
		
		$conn = $banco($connBanco($usessao->sistema_local));
		 
		
		$sth = $conn->prepare("SELECT * FROM user where user_nickname = :login and user_active = 1 ");
		$sth->bindParam(':login', $identificador, PDO::PARAM_STR,200);
		$sth->execute();
		 
		$retorno =  $sth->fetch(PDO::FETCH_ASSOC);
	
		if($sth->rowCount() > 0){
			require 'Classes/Login.php';
			
			$login = new Login($password);
			
			if($login->isBValidSenha(
				$retorno['user_password'],
				$retorno['secret_key'],
				$retorno['secret_iv']
			)
			){
				
				$bolGravarDados = true;
				
				
			}
			
			
			
		}else{
			$data['error'] = true;
			$data['message'] = "Usuário e/ou Senha Inválidos";
		}
	
	if($bolGravarDados){
		
		
		
		try{
			
			# Atualizar senha e salt na tabela usuarios
			$sth = $conn->prepare("UPDATE user SET
												user_password = :senha, 
 												secret_key = :sk ,
 												secret_iv = :sv 
 											WHERE user_id= :id ");
			
			$idt = $sk = $si = $pa = null;
			
			$sth->bindParam(':senha',$pa, PDO::PARAM_STR,150);
			$sth->bindParam(':sk', $sk, PDO::PARAM_STR,150);
			$sth->bindParam(':sv', $si, PDO::PARAM_STR,150);
			$sth->bindParam(':id', $idt, PDO::PARAM_STR,40);
			$pa =  $login->getPassEncrypt();
			$si = $login->getSi();
			$sk = $login->getSk();
			$idt  = $retorno['user_id'];
			
			$sth->execute();
			
			 
			 
			$usessao->usuario_id = $retorno['user_id'];
			$usessao->user_first_name = $retorno['user_first_name'];
			$usessao->user_last_name = $retorno['user_last_name'];
			$usessao->user_email = $retorno['user_email'];
			$usessao->user_birthday = $retorno['user_birthday'];
			$usessao->user_phone = $retorno['user_phone'];
			 
			$usessao->logado = true;
			
			
			
		}catch (Exception $e){
			throw new Exception($e->getMessage());
			
		}
		
		
	}
	 
        
	 
	
	$retorno =  new Response(json_encode($data));
	$retorno->headers->set('Content-Type','application/json; charset=utf-8');
	return $retorno;
	
	
});


return $login;