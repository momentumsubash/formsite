<?php

use Domain/Device;

class DeviceTest extends PHPUnit_Framework_TestCase{

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

	public function test_Screen(){

		$device= new Device();
		$device->set_screen('7*5inch');

		$this->assertEquals($device->get_screen(),"7*5inch");
		
		
	}


	public function test_battery(){

		$device= new Device();
		$device->set_battery('3500mah');

		$this->assertEquals($device->get_battery(),"3500mah");
		
		
	}

	public function test_memory(){

		$device= new Device();
		$device->set_memory('16gb');

		$this->assertEquals($device->get_memory(),"16gb");
		
		
	}
}
