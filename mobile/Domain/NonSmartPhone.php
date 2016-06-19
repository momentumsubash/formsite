<?php

namespace Mobile\Domain;
use Domain\Device;
use ValueObject\Id;
use Name;
use Company;
use OperatingSystem;


/**
* 
*/
class NonSmartPhone extends Device
{	

	private $device;
	
	function __construct( Mobile\Domain\Device $device)
	{
		$this->device = $device;
	}
	
	public function detail($device,$array){

		
		$device_id= new Id();
		$processor = new Processor();
		$memory= $device->get_memory();
		$body= new Body();
		$screen= $device->get_screen();
		$battery= $device->get_battery();
		$name= new Name('tablet');
		$company = new Company('lava');
		$os= new OperatingSystem('6.0');
		$new_smartphone = array('device_id' => $device_id,
								'type' 	=> 'nonsmartphone',
								'screen' => $screen,
								'battery' => $battery,
								'name' => $name,
								'company' => $company,
								'os' => $os,
								'processor' => $processor,
								'memory' => $memory,
								'bddy' => $body,
		 );

		return $new_smartphone;

	}
	//first load edit_specification
			public function edit_specification($specification){

				if ($specification==Null) {
					$this->detail($device);
				}
				else

					return $specification;
				
			}
		
}