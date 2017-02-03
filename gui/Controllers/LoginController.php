<?php

use Symfony\Component\HttpFoundation\Request;
 


$login = $app['controllers_factory'];

$login->get('/', function()use($twig,$ttoken){
	$id_form ='login';
	return $twig->render('setores/login/login.twig', array('token' => $ttoken($id_form)));
});

$login->post('/acessar', function(Request $request)use($twig,$ttoken,$ctoken,$app,$connBanco,$banco){
	$id_form ='login';
        

	$dados = $request->request->all();
	 
	if(!$ctoken($id_form)){
		return $twig->render('setores/login/login.twig', array('token' => $ttoken($id_form),'error_msg'=>'Falha no login'));
	}else{
		$usessao = Eglobal::getStance()->getSessao();
		
		$identificador = filter_var($dados['identificador'], FILTER_SANITIZE_NUMBER_INT);
		$password = filter_var($dados['password'], FILTER_SANITIZE_STRING);
		
		$conn = $banco($connBanco($usessao->sistema_local));
		 
		
		$sth = $conn->prepare("SELECT * FROM v_usuarios where usuario_cpf = :cpf and usuario_ativo = 'S' ");
		$sth->bindParam(':cpf', $identificador, PDO::PARAM_STR,15);
		$sth->execute();
		 
		$retorno =  $sth->fetch(PDO::FETCH_ASSOC);
	 
             
		$bolGravarDados = false;
		 
		if(count($retorno) > 0){
			require 'Classes/Login.php';
		
			$login = new Login($password);
		
			if($login->isBValidSenha(
                                    $retorno['usuario_senha'],
                                    $retorno['usuario_key'],
                                    $retorno['usuario_iv']
                                )
                          ){
				 
				$bolGravarDados = true;
                              
				 
			}else{
				 
                             
                               require 'Classes/Sipps.php';
                               $loginSipps = new Sipps();
				 
				if($loginSipps->isBolvalidLogin($identificador, $password)){
					$bolGravarDados = true;
					
				}else{
					return $twig->render('setores/login/login.twig', array('token' => $ttoken($id_form),'error_msg'=>'Usuário e/ou Senha inválidos'));
					
				}
				
				
			}
			
			
			if($bolGravarDados){
				
				
				  
				try{
					 
					# Atualizar senha e salt na tabela usuarios
					$sth = $conn->prepare("UPDATE usuarios SET
												senha = :senha, 
 												secret_key = :sk ,
 												secret_iv = :sv 
 											WHERE id= :id ");
					
					$idt = $sk = $si = $pa = null;
					
					$sth->bindParam(':senha',$pa, PDO::PARAM_STR,150);
					$sth->bindParam(':sk', $sk, PDO::PARAM_STR,150);
					$sth->bindParam(':sv', $si, PDO::PARAM_STR,150);
					$sth->bindParam(':id', $idt, PDO::PARAM_STR,40);
					$pa =  $login->getPassEncrypt();
					$si = $login->getSi();
					$sk = $login->getSk();
					$idt  = $retorno['usuario_id'];
					
					$sth->execute();
					
					# Caso já exista uma sessao ativa ele nao grava no banco
					$sth = $conn->query("SELECT id FROM sessions where token = '$usessao->token' and id = '$usessao->session_row_table' ");
					$sth->execute();
					$row  = $sth->fetch(PDO::FETCH_ASSOC);
					
					 
					 
					if($sth->rowCount() == 0){
						# Gravar Sessao no banco
						
						 
						$dt = date ('Y-m-d h:m:s');
						$sth = $conn->query("Call grava_sessao ('$usessao->ip', '$usessao->agent', 
								'$usessao->inicio', '$usessao->validacao', '$usessao->token', '$dt', @sid);")->fetch(PDO::FETCH_ASSOC);
						$session_id  = $sth['sid'];
                                                
					}else{
						$session_id  = $row['id'];
					}
					
					 
				 	
					/* Gravar dados na session para usar futuramente */
                                        
                      /* Monitorar os horarios que o usuario executou o login usando a mesma session*/
                    $usessao->session_row_table= $session_id;
					
					$usessao->usuario_id = $retorno['usuario_id'];
					$usessao->usuario_nome = $retorno['usuario_nome'];
					$usessao->usuario_lotacao = $retorno['usuario_lotacao'];
					$usessao->usuario_id_lotacao = $retorno['usuario_id_lotacao'];
					$usessao->usuario_matricula = $retorno['usuario_matricula'];
					$usessao->usuario_tipo_id = $retorno['usuario_tipo_id'];
					$usessao->usuario_perfil = $retorno['usuario_perfil'];
					$usessao->logado = true;
                                        
                                        
                                       
				}catch (Exception $e){
					throw new Exception($e->getMessage());
					
				}
				
				 
			}
			
			
			
		}else{
			return $twig->render('setores/login/login.twig', array('token' => $ttoken($id_form),'error_msg'=>'Usuário não cadastrado'));
		}
		
	}
	
	return $app->redirect('/');
	
	
});


return $login;