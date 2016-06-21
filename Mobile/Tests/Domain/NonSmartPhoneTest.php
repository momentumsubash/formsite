<?php

use Domain/NonSmartPhone;

class NonSmartPhoneTest extends PHPUnit_Framework_TestCase{

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
		
		$manufacture= mock::mock('Interface\iManufacture');
		$service= mock::mock('Service\ServiceProvider');
		$non_smartphone= new NonSmartPhone($manufacture, $service);

		$this->assertNotNull($non_smartphone);
	}

	public function test_detail(){

		$new_non_smartphone = array('device_id' => '',
								'type' 	=> 'smartphone',
								'screen' => 'screen',
								'battery' => '3500mah',
								'name' => 'name',
								'company' => 'company',
								'mode' => 'gsm',
								'os' => '6.0',
								'processor' => 'octa core 1.7gz',
								'memory' => '16gb',
								'bddy' => 'rigid',
		 );

		$manufacture= mock::mock('Interface\iManufacture');
		
		$manufacture->shouldReceive('build')
				->once()
				->with($new_non_smartphone)
				->andReturn('phone_entities');

		

	}

	public function test_edit_specification(){

		$service= mock::mock('Service\ServiceProvider');

		$old_non_smartphone = array(
                                'status' =>'new',
                                'type'  => 'smartphone',
                                'change'  => 'screen'
            );

		$service->shouldReceive('fix')
				->once()
				->with($old_non_smartphone)
				->andReturn('device');

	}

}
