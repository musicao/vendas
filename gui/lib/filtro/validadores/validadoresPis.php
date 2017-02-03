<?php

namespace filtro\validadores;

require_once ('Validadores.php');

use filtro\validadores\Validadores;

class validadoresPis implements Validadores {
		private $assercao;
		public function _is($dado) {
			$dado = (string) $dado;
			require_once 'validadoresNb.php';
			$nb=new validadoresNb();
			if($nb->_is($dado)) return false;	
			require_once 'validadoresCpf.php';
			$cpf=new validadoresCpf();
			if($cpf->_is($dado)) return false;
			$dado = str_pad($dado,11,"0",\STR_PAD_LEFT);
			
			if(strlen(trim($dado)) > 10)
			{
				$regex = '%^([0-9]{11})$%';
				if(preg_match($regex,trim($dado),$match))
				{
					switch ($dado){
						case '00000000000':
							{
								$this->assercao = "Falha :nit invalido";
								return false;
							}
						case '11111111111' :
							{
								$this->assercao = "Falha :nit invalido";
								return false;
							}
						case '22222222222':
							{
								$this->assercao = "Falha :nit invalido";
								return false;
							}	
						case '33333333333' :
							{
								$this->assercao = "Falha :nit invalido";
								return false;
							}
						case '44444444444':
							{
								$this->assercao = "Falha :nit invalido";
								return false;
							}
						case '55555555555':
							{
								$this->assercao = "Falha :nit invalido";
								return false;
							}																						
						case '66666666666':
							{
								$this->assercao = "Falha :nit invalido";
								return false;
							}
						case '77777777777':
							{
								$this->assercao = "Falha :nit invalido";
								return false;
							}
						case '99999999999':
							{
								$this->assercao = "Falha :nit invalido";
								return false;
							}
						case '88888888888':
							{
								$this->assercao = "Falha :nit invalido";
								return false;
						
		}												
					}
					$fator = "3298765432";
					$numero=strlen($fator);
					$soma=0;
					for ($t = 0; ($numero +1) > $t; $t++) {
						$soma += ($fator{$t} * $dado{$t});
						
						}
					$dif = $soma % 11;
					if($dif == 0 or $dif == 1)
					{
						if($dado[10] == 0)
						{
							return true;
						}
						else 
						{
							$this->assercao = "Falha :nit invalido";
							return false;
						}
					}
					else{
						$dif = 11 - $dif ;
						if($dado[10] == $dif)
						{
							return true;
						}
						else{
							$this->assercao = "Falha :nit invalido";
							return false;
						}
					}	
					return false;
				}
				return false;
			}
			else{
				$this->assercao = "Falha : numero de caracteres devem ser no mínimo 11";
				return false;
			}
		}
}

