<?php

require_once '../validaEntrada.php';

//require_once 'PHPUnit/Framework/TestCase.php';

/**
 * validaEntrada test case.
 */
class validaEntradaTest {
	
	/**
	 *
	 * @var validaEntrada
	 */
	private $validaEntrada;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		//parent::setUp ();
		
		// TODO Auto-generated validaEntradaTest::setUp()
		
		$this->validaEntrada = require_once('../validaEntradaDI.php');
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated validaEntradaTest::tearDown()
		$this->validaEntrada = null;
		
		//parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
		$this->setUp();
	}
	
	/**
	 * Tests validaEntrada->__construct()
	 */

	
	/**
	 * Tests validaEntrada::validaNum()
	 */
	public function testValidaNum() {
		// TODO Auto-generated validaEntradaTest::testValidaNum()
		//$this->markTestIncomplete ( "validaNum test not implemented" );
		
		$array_true=array(
				array('29676821870','cpf'),
				array('12099364852','pis'),
				array('120.-9;9;3-64-85-2','pis'),
				array('29-67;?682?18?70','cpf'),
				array('1228178361','nb'),
				array('122.817.83-61','nb'),
				);
		$array_false=array(
				array('29676821870','nb'),
				array('12099364852','cpf'),
				array('120.-9;9;3-64-85-2','cpf'),
				array('29-67;?682?18?70','pis'),
				array('1228178361','cpf'),
		);
		$tempf = $this->validaEntrada;
		$tempf=$tempf(null);
		foreach($array_true as $k=>$v)
		{ 
			
			
			$temp=$tempf($v[0]);			
		echo $v[1], $temp[0],"id ".$temp[0].'corretamente identificado atraves do numero '.$temp[1];
		
		}
		foreach($array_false as $key=>$value)
		{
				
			$tempe =$tempf($value[0]);
			echo $value[1], $tempe[0],"id ".$tempe[0].'corretamente falhado  atraves do numero '.$tempe[1];
		
		}
	}
}
$m = new validaEntradaTest();
echo $m->testValidaNum();