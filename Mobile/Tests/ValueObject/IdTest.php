<?php

use ValueObject\Id;

class IdTest extends PHPUnit_Framework_TestCase{

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


	public function test_Construct(){

		$id= new Id('012');
		$this->assertNotNull($id->get_id());
		$this->assertEquals($id->get_id(),'012');
	}
}
