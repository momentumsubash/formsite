<?php

namespace Mobile;
use Device;
use Id;
use Name;
use Company;
use GSM;
use Cdma;
use OperatingSystem;


/**
* 
*/
class SmartPhone extends Device
{	

	private $device;
	
	function __construct( Mobile\Device $device)
	{
		$this->device = $device;
	}
	
	public function detail(){

		
		$device_id= new Id();
		$processor = new Processor();
		$memory= new Memory();
		$body= new Body();
		$screen= $device->get_screen();
		$battery= $device->get_battery();
		$name= new Name('Galaxy');
		$company = new Company('Samsung');
		$gsm= new Gsm('Ntc');
		$os= new OperatingSystem('6.0');
		$new_smartphone = array('device_id' => $device_id,
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

		return $new_smartphone;

	}
}