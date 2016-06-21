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

	private $manufacture;
	private $service;
	
	function __construct(Interface\iManufacture $manufacture,
						Mobile\Service\ServiceProvider $service)
	{
		$this->manufacture = $manufacture;
		$this->service = $service;
	}
	
	public function detail($array){
		
		$device_id= new Id();
		$processor = new Processor();
		$memory= $this->get_memory();
		$body= new Body();
		$screen= $this->get_screen();
		$battery= $this->get_battery();
		$name= new Name('tablet');
		$company = new Company('lava');
		$os= new OperatingSystem('6.0');
		$new_smartphone = array('device_id' => $device_id,
								'type' 	=> $array['type'],
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
			public function edit_specification($array){

				if ($array==Null) {
					$this->detail($device);
				}
				else

					$output = $this->service->fix($array);
					return $output;
				
			}
		
}