<?php

use ValueObject\Name;

class NameTest extends PHPUnit_Framework_TestCase{

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

	public function test_name(){

		$name= new Name();
		$name->set_name('name');

		$this->assertEquals($name->get_name(),"name");
		
		
	}

}
