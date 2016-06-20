<?php

use ValueObject\Cdma;

class CdmaTest extends PHPUnit_Framework_TestCase{

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

	public function test_cdma(){

		$cdma= new Cdma();
		$cdma->set_cdma('ntc');

		$this->assertEquals($cdma->get_cdma(),"ntc");
		
		
	}

}
