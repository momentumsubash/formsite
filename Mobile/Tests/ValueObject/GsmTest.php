<?php

use ValueObject\Gsm;

class GsmTest extends PHPUnit_Framework_TestCase{

	/**
	 * A basic functional test example.
	 *
	 * @return void


	 */
	public function setUp() {
		
		parent::setUp();
	}
	
	public function tearDown() {
		
		parent::tearDown();
	}

	public function test_gsm(){

		$gsm= new Gsm();
		$gsm->set_gsm('ntc');

		$this->assertEquals($gsm->get_gsm(),"ntc");
		
		
	}

}
