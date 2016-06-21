<?php

namespace Mobile\Domain;

use Domain\Device;
use Id;
use Name;
use Company;
use OperatingSystem;



class Tablet extends Device
{	

	private $device;
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
		$name= new Name('ipad');
		$company = new Company('iphone');
		$os= new OperatingSystem('OSX');
		$new_smartphone = array('device_id' => $device_id,
								'type' 	=> 'tablet',
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
}