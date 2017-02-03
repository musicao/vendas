<?php

namespace filtro\validadores;

require_once ('Validadores.php');

use filtro\validadores\Validadores;

class validadoresNb implements Validadores {
	private $assercao;
	public function _is($dado) {
		$dado = (string) $dado;
		$dado = str_pad($dado,10,"0",\STR_PAD_LEFT);
		if(strlen(trim($dado)) > 9)
		{
			$regex = '%^([0-9]{10})$%';
			if(preg_match($regex,trim($dado),$match))
			{
				switch ($dado){
					case '0000000000':
						{
							$this->assercao = "Falha :nb invalido";
							return false;
						}
					case '1111111111' :
						{
							$this->assercao = "Falha :nb invalido";
							return false;
						}
					case '2222222222':
						{
							$this->assercao = "Falha :nb invalido";
							return false;
						}
					case '3333333333' :
						{
							$this->assercao = "Falha :nb invalido";
							return false;
						}
					case '4444444444':
						{
							$this->assercao = "Falha :nb invalido";
							return false;
						}
					case '5555555555':
						{
							$this->assercao = "Falha :nb invalido";
							return false;
						}
					case '6666666666':
						{
							$this->assercao = "Falha :nb invalido";
							return false;
						}
					case '7777777777':
						{
							$this->assercao = "Falha :nb invalido";
							return false;
						}
					case '9999999999':
						{
							$this->assercao = "Falha :nb invalido";
							return false;
						}
					case '8888888888':
						{
							$this->assercao = "Falha :nb invalido";
							return false;
	
						}
				}
				$fator = "298765432"; 
				$numero=strlen($fator);
				$soma=0;
				for ($t = 0; ($numero +1) > $t; $t++) {
					$soma += ($fator{$t} * $dado{$t});
	
				}
				$dif = $soma % 11;
				if($dif == 0 or $dif == 1)
				{
					if($dado[9] == 0)
					{
						return true;
					}
					else
					{
						$this->assercao = "Falha :nb invalido";
						return false;
					}
				}
				else{
					$dif = 11 - $dif ;
					if($dado[9] == $dif)
					{
						return true;
					}
					else{
						$this->assercao = "Falha :nb invalido";
						return false;
					}
				}
				return false;
			}
			return false;
		}
		else{
			$this->assercao = "Falha : numero de caracteres devem ser no mínimo 10";
			return false;
		}
	}
	}
	
