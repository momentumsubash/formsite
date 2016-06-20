<?php

use Company;

class CompanyTest extends PHPUnit_Framework_TestCase{

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

	public function test_company(){

		$company= new Company();
		$company->set_company('samsung');

		$this->assertEquals($company->get_company(),"samsung");
		
		
	}

}
