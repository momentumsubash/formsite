<?php

use Service/ServiceProvider;

class ServiceProviderTest extends PHPUnit_Framework_TestCase{

	/**
	 * A basic functional test example.
	 *
	 * @return void


	 */

	public function test_Construct(){
		
		$non_smartphone= mock::mock('Domain\NonSmartPhone');
		$smartphone= mock::mock('Domain\SmartPhone');
		$tablet= mock::mock('Domain\Tablet');
		$service= new ServiceProvider($smartphone, $non_smartphone,$tablet);
		$this->assertNotNull($service);
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
		$service= new Manufacture($smartphone, $non_smartphone,$tablet);

		$new_smartphone_screen = array('type' => 'smartphone',
								'change'=>'screen'
		 );

		$new_smartphone_memory = array('type' => 'smartphone',
								'change'=>'memory'
		 );

		$new_non_smartphone_screen =  array('type' => 'nonsmartphone',
											'change'=>'screen'
		 );
		$new_non_smartphone_memory =  array('type' => 'nonsmartphone',
											'change'=>'memory'
		 );
		$new_tablet_screen =  array('type' => 'tablet',
									'change'=>'screen'
		 );
		$new_tablet_memory =  array('type' => 'tablet',
									'change'=>'memory'
		 );

		//test for smartphone

		$raw_smartphone_screen=$smartphone->shouldReceive('fix')
										->once()
										->with($new_smartphone_screen);
		
		$this->assertEquals($raw_smartphone_screen['type'],"smartPhone");
		$this->assertEquals($raw_smartphone_screen['change'],"screen");

		$raw_smartphone_memory=$smartphone->shouldReceive('fix')
										->once()
										->with($new_smartphone_memory);
		
		$this->assertEquals($raw_smartphone_memory['type'],"smartPhone");
		$this->assertEquals($raw_smartphone_memory['change'],"memory");

		//test for non-smartphone

		$raw_non_smartphone_screen=$non_smartphone->shouldReceive('fix')
										->once()
										->with($new_non_smartphone_screen);
		
		$this->assertEquals($raw_non_smartphone_screen['type'],"smartPhone");
		$this->assertEquals($raw_non_smartphone_screen['change'],"screen");

		$raw_non_smartphone_memory=$non_smartphone->shouldReceive('fix')
										->once()
										->with($new_non_smartphone_memory);
		
		$this->assertEquals($raw_non_smartphone_memory['type'],"smartPhone");
		$this->assertEquals($raw_non_smartphone_memory['change'],"memory");

		//test for tablet

		$raw_tablet_screen=$tablet->shouldReceive('fix')
										->once()
										->with($new_non_smartphone_screen);
		
		$this->assertEquals($raw_non_smartphone_screen['type'],"smartPhone");
		$this->assertEquals($raw_non_smartphone_screen['change'],"screen");

		$raw_tablet_memory=$tablet->shouldReceive('fix')
										->once()
										->with($new_non_smartphone_memory);
		
		$this->assertEquals($raw_non_smartphone_memory['type'],"smartPhone");
		$this->assertEquals($raw_non_smartphone_memory['change'],"memory");

	
	}


	
}
