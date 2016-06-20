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
	private $manufacture;
	private $service;
	
	function __construct( Mobile\Domain\Device $device, 
						Interface\iManufacture $manufacture,
						Mobile\Service\ServiceProvider $service)
	{
		$this->device = $device;
		$this->manufacture = $manufacture;
		$this->service = $service;
	}
	
	public function detail($array){

		
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


		$output = $this->manufacture->build($new_smartphone);
		return $output;

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