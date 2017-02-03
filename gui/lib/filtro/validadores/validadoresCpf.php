<?php

namespace filtro\validadores;

require_once ('Validadores.php');

use filtro\validadores\Validadores;

class validadoresCpf implements Validadores {
		private $assercao;
		public function _is($dado) {
			$dado = (string) $dado;
			$dado = str_pad($dado,11,"0",\STR_PAD_LEFT);
			if(strlen(trim($dado)) > 10)
			{
				$regex = '%^([0-9]{11})$%';
				if(preg_match($regex,trim($dado),$match))
				{
					switch ($dado){
						case '00000000000':
							{
								$this->assercao = "Falha :cpf invalido";
								return false;
							}
						case '11111111111' :
							{
								$this->assercao = "Falha :cpf invalido";
								return false;
							}
						case '22222222222':
							{
								$this->assercao = "Falha :cpf invalido";
								return false;
							}	
						case '33333333333' :
							{
								$this->assercao = "Falha :cpf invalido";
								return false;
							}
						case '44444444444':
							{
								$this->assercao = "Falha :cpf invalido";
								return false;
							}
						case '55555555555':
							{
								$this->assercao = "Falha :cpf invalido";
								return false;
							}																						
						case '66666666666':
							{
								$this->assercao = "Falha :cpf invalido";
								return false;
							}
						case '77777777777':
							{
								$this->assercao = "Falha :cpf invalido";
								return false;
							}
						case '99999999999':
							{
								$this->assercao = "Falha :cpf invalido";
								return false;
							}
						case '88888888888':
							{
								$this->assercao = "Falha :cpf invalido";
								return false;
							}												
					}
					for ($t = 9; $t < 11; $t++) {
						for ($d = 0, $c = 0; $c < $t; $c++) {
							$d += $dado{$c} * (($t + 1) - $c);
							}
							$d = ((10 * $d) % 11) % 10;
							if ($dado{$c} != $d) {
								return false;
							}
						}
					return true;
				}
				return false;
			}
			else{
				$this->assercao = "Falha : numero de caracteres devem ser no mínimo 11";
				return false;
			}
		}
	}
	


