<?php

use Mobile;

class MobileTest extends PHPUnit_Framework_TestCase{

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
		
		$smartphone= mock::mock('Domain\SmartPhone');
		$non_smartphone= mock::mock('Domain\NonSmartPhone');
		$tablet= mock::mock('Domain\Tablet');

		$mobile= new Mobile($smartphone, $non_smartphone, $tablet);

		$this->assertNotNull($mobile);
	}


	public function test_index()
	{



		$smartphone= mock::mock('Domain\SmartPhone');
		$non_smartphone= mock::mock('Domain\NonSmartPhone');
		$tablet= mock::mock('Domain\Tablet');


		$mobile= new Mobile();

		$smartphone->shouldReceive('detail')
			->once()
			->andReturn(1);

		$smartphone->shouldReceive('edit_specification')
			->once()
			->andReturn(1);

		$non_smartphone->shouldReceive('detail')
			->once()
			->andReturn(1);

		$non_smartphone->shouldReceive('edit_specification')
			->once()
			->andReturn(1);

		$tablet->shouldReceive('detail')
			->once()
			->andReturn(1);

		$tablet->shouldReceive('edit_specification')
			->once()
			->andReturn(1);

		$mobile= new Mobile($smartphone, $non_smartphone, $tablet);

		$mobile->shouldReceive('index')
				->once()
				->andReturn('phone')
		
	}

}
