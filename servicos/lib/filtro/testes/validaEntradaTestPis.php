<?php

require_once 'servicos/lib/filtro/validaEntrada.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * validaEntrada test case.
 */
class validaEntradaTestPis extends PHPUnit_Framework_TestCase {
	
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
		
		// TODO Auto-generated validaEntradaTestPis::setUp()
		
		$this->validaEntrada = new filtro\validaEntrada(/* parameters */);
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated validaEntradaTestPis::tearDown()
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
		// TODO Auto-generated validaEntradaTestPis::testValidaNum()
		$nb = require 'stub/pisstub.php';
		foreach($nb as $nit)
		{
			$bool=filtro\validaEntrada::validaNum($nit,'pis');
			//$this->assertTrue($bool);
			$this->assertContains($nit, $bool);
		
		}
	}
}

