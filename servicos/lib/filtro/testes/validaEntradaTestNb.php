<?php

require_once '/var/www/berp/servicos/lib/filtro/validaEntrada.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * validaEntrada test case.
 */
class validaEntradaTestNb extends PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var validaEntrada
	 */
	private $validaEntrada;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		// TODO Auto-generated validaEntradaTestNb::setUp()
		
		$this->validaEntrada = new filtro\validaEntrada(/* parameters */);
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated validaEntradaTestNb::tearDown()
		$this->validaEntrada = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}
	
	/**
	 * Tests validaEntrada->__construct()
	 */
	
	
	/**
	 * Tests validaEntrada::validaNum()
	 */
	public function testValidaNum() {
		// TODO Auto-generated validaEntradaTestNb::testValidaNum()
		//$this->markTestIncomplete ( "validaNum test not implemented" );
		
		$nb = require 'stub/nbstub.php';
		foreach($nb as $beneficio)
		{
			$bool=filtro\validaEntrada::validaNum($beneficio,'nb');
		//$this->assertTrue($bool);
		$this->assertContains($beneficio, $bool);
		}
	}
	public function testValidaNumRejeitados() {
		$nb = require 'stub/novosnbsstub.php';
		foreach($nb as $beneficio1)
		{
			$bool=filtro\validaEntrada::validaNum($beneficio1,'nb');
			//$this->assertTrue($bool);
			$this->assertContains($beneficio1, $bool);
		}
	}
}

