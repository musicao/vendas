<?php namespace filtro\sanitizadores;
	
interface filtros
{
	public function filtra($arg);
	public function setRegra($expr);
}
class filtro_Error extends \UnexpectedValueException {}

abstract class filtro implements filtros
{
	const RETORNO_ARRAY = 2, RETORNO_PLAN = 1;
	protected static $controle, $id='filtro', $regra =array();
	protected $config = array(), $configurado= array();

	function filtra($arg){;}

	public static function setInstance($tipo)
	{  $tipo = trim(strtolower($tipo));
	if(!self::$controle[$tipo])
	{
		$class = self::$id .'_'. $tipo;
		self::$controle[$tipo] = new $class();
	}
	return self::$controle[$tipo];
	}
	protected function configure()
	{
		$match_all = array('default'=>\PREG_PATTERN_ORDER,'alternativo'=>\PREG_SET_ORDER,'posicao'=>\PREG_OFFSET_CAPTURE);
		$delim = array('default'=>'/','alternativo'=>'#','alternativo1'=>'&','alternativo2'=>'!');
		$plit = array('default'=>\PREG_SPLIT_NO_EMPTY,'alternativo'=>NULL);
		$error = array('normal'=>\PREG_NO_ERROR,PREG_INTERNAL_ERROR=>'Erro geral',\PREG_BACKTRACK_LIMIT_ERROR=>'expressao regular grande',\PREG_RECURSION_LIMIT_ERROR=>'expressao gastou todos os recursos','funcao'=>'preg_last_error');
		$modificador = array('case'=>'i','sem_quebra'=>'m','ponto_geral'=>'s','sem_brancos'=>'x','guloso'=>'U','utf8'=>'u');
		$expressoes = array('inicio'=>'\A','inicio_linha'=>'^','fim'=>'\Z','fim_linha'=>'$');

		$this->config= array('match_all'=>$match_all,'delimitador'=>$delim,'split'=>$plit,'spliti'=>$plit,'error'=>$error,'modificadores'=>$modificador,'expressoes'=>$expressoes);
	}
	function setRegra($expr){;}
	protected function error($expr = Null)
	{
		if(\preg_last_error() !== $this->config['error']['normal'] )
		{ $err = \preg_last_error();
		$this->alert($this->config['error'][$err],$expr);
		throw new filtro_Error('erro ocorrido no parser '.$this->nome. ' na expressao regular '. $this->config['error'][$err],$this->numberId);
		}
	}

}
class filtro_valida extends filtro
{

	protected $id_ = 'filtroOl',$numberId=1;
	private $func= 'match';
	public function __construct()
	{
		$this->configure();
		$this->configurado['flags']= $this->config['match_all']['alternativo'] | $this->config['match_all']['posicao'];
		$this->configurado['modificadores']=$this->config['modificadores']['case'].$this->config['modificadores']['guloso'].$this->config['modificadores']['sem_brancos'].$this->config['modificadores']['sem_quebra'];
		$separador = $this->config['delimitador']['default'];
		$this->regra['sufixo'] = $separador . $this->configurado['modificadores'];
		$this->regra['prefixo']= $separador;
		//debug_print_backtrace();
		$this->regra['inicial']= $this->config['expressoes']['inicio_linha'];
		$this->regra['fechamento']= $this->config['expressoes']['fim_linha'];
		$this->setRegra('[ ]?(([0-9]([. -]){0,1}?){4,8}?)');
	}
	public function set_multiplicit($multi=null)
	{
		if($multi)
		{
			$this->func = 'match_all';
		}
		else{
			$this->func = 'match';
		}
		$this->regra['funcao'] = 'preg_'.$this->func;
		$this->prepara();
		return $this;
	}
	public function setRegra($expr)
	{
		$this->regra['expressao']= $this->regra['prefixo'].$expr.$this->regra['sufixo'];
		//$this->regra['funcao'] = 'preg_'.$this;
		$this->prepara();
		return $this;
	}
	private function prepara()
	{
		$tipo = $this->func;
		switch ($tipo)
		{
			case 'match':
				$retorno = self::RETORNO_PLAN;
				break;
			case 'match_all':
				$retorno = self::RETORNO_ARRAY;
				break;
			default:
				$retorno = self::RETORNO_PLAN;
		}
		$this->regra['retorno'] = $retorno;
	}
	public function filtra($bruto )
	{   $retorno_parcial= Null;
		if($this->regra['retorno'] == self::RETORNO_ARRAY)
	{
		$resultado = $this->regra['funcao']($this->regra['expressao'],$bruto,$retorno_parcial,$this->configurado['flags']);
			
	}
	else
	{
		$resultado = $this->regra['funcao']($this->regra['expressao'],$bruto,$retorno_parcial,$this->config['match_all']['posicao']);
			
			
	}
	if($resultado == 0)
	{
		$this->error($this->regra['expressao']);
	}
	if($this->regra['retorno'] == self::RETORNO_ARRAY)
	{
			
		foreach($retorno_parcial as $k_resultado=>$v_resultado)
		{
				
			$resultado_final[] = $this->monta_resultado($v_resultado);
		}
	}
	else
	{
		$resultado_final[0] = $this->monta_resultado($retorno_parcial);
	}

	return $resultado_final;
	}
	public function monta_resultado($arr)
	{
		$retor = preg_replace('%[ ]{2,}%',' ',$arr[1][0]);
		return $retor;
	}

}
