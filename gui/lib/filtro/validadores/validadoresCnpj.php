<?php

namespace filtro\validadores;

require_once ('Validadores.php');

use filtro\validadores\Validadores;

class validadoresCnpj implements Validadores {
	private $assercao;
	public function _is($dado) {
		$dado = str_pad($dado,7,"0",\STR_PAD_LEFT);
		if(strlen(trim($dado)) > 6)
		{
			$regex = '%^([0-7][0-9]{6})$%';
			if(preg_match($regex,trim($dado),$match))				
			{
				return false;
			}
			return false;
		}
		else{
			$this->assercao = "Falha : numero de caracteres devem ser no mínimo 7";
			return false;
		}
	}
}
