<?php

namespace Mobile\Domain;
use Domain\Device;
use Id;
use Name;
use Company;
use GSM;
use Cdma;
use OperatingSystem;
use Interface\iManufacture;
use  Mobile\Service\ServiceProvider;


class SmartPhone extends Device
{	

	private $device;
	private $manufacture;
	private $service;
	
	function __construct( Mobile\Domain\Device $device, 
						Interface\iManufacture $manufacture,
						Mobile\Service\ServiceProvider $service;)
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
		$name= new Name('Galaxy');
		$company = new Company('Samsung');
		$gsm= new Gsm('Ntc');
		$os= new OperatingSystem('6.0');
		$new_smartphone = array('device_id' => $device_id,
								'type' 	=> 'smartphone',
								'screen' => $screen,
								'battery' => $battery,
								'name' => $name,
								'company' => $company,
								'mode' => $gsm,
								'os' => $os,
								'processor' => $processor,
								'memory' => $memory,
								'bddy' => $body,
		 );


		$output = $this->manufacture->build($new_smartphone);
		return $output;

	}

	public function edit_specification($array){

				if ($array==Null) {
					$this->detail($array);
				}
				else

					$output = $this->service->fix($array);
					return $output;
				
			}
}