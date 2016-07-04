<?php

use ValueObject\OperatingSystem;

class OperatingSystemTest extends PHPUnit_Framework_TestCase{

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

	public function test_Os(){

		$os= new OperatingSystem();
		$os->set_os('os');

		$this->assertEquals($os->get_os(),"os");
		
		
	}

}
