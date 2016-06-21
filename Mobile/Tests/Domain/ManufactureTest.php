<?php

use Domain/Manufacture;

class ManufactureTest extends PHPUnit_Framework_TestCase{

	/**
	 * A basic functional test example.
	 *
	 * @return void


	 */

	public function test_Construct(){
		
		$non_smartphone= mock::mock('Domain\NonSmartPhone');
		$smartphone= mock::mock('Domain\SmartPhone');
		$tablet= mock::mock('Domain\Tablet');
		$manufacture= new Manufacture($smartphone, $non_smartphone,$tablet);
		$this->assertNotNull($manufacture);
	}


	public function setUp() {
		
		parent::setUp();
	}
	
	public function tearDown() {
		
		parent::tearDown();
	}

	public function test_build(){

		$non_smartphone= mock::mock('Domain\NonSmartPhone');
		$smartphone= mock::mock('Domain\SmartPhone');
		$tablet= mock::mock('Domain\Tablet');
		$manufacture= new Manufacture($smartphone, $non_smartphone,$tablet);

		$new_smartphone = array('type' => 'smartphone' );
		$new_non_smartphone = array('type' => 'nonsmartphone');
		$new_tablet = array('type' => 'tablet');

		$raw_smartphone=$manufacture->shouldReceive('build')
										->once()
										->with($new_smartphone);
		
		$this->assertEquals($raw_smartphone['type'],"smartPhone");

		$raw_non_smartphone=$manufacture->shouldReceive('build')
											->once()
											->with($new_non_smartphone);

		$this->assertEquals($raw_non_smartphone['type'],"nonsmartphone");

		$raw_tablet=$manufacture->shouldReceive('build')
											->once()
											->with($new_tablet);

		$this->assertEquals($raw_tablet['type'],"tablet");
		
	}


	
}
