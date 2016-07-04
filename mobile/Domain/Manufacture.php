<?php

namespace Mobile\Domain;
// use Device;
// use Id;
// use Name;
// use Company;
// use GSM;
// use Cdma;
// use OperatingSystem;
use Interface\iManufacture;


/**
* 
*/
class Manufacture implements iManufacture
{	

	protected $smart_phone;
	protected $non_smart_phone;
	protected $tablet;

	function __construct( 
							// Mobile\Domain\Device $device, 
							Mobile\Domain\SmartPhone $smart_phone,
							Mobile\Domain\NonSmartPhone $non_smart_phone,
							Mobile\Domain\Tablet $tablet
						)
	{
		// $this->device = $device;
		$this->smart_phone = $smart_phone;
		$this->non_smart_phone = $non_smart_phone;
		$this->tablet = $tablet;
	}

	public function build($array){

		$device_id= new Id();
		$processor = new Processor();
		$memory= $this->get_memory();
		$body= new Body();
		$screen= $this->get_screen();
		$battery= $this->get_battery();
		$name= new Name('Galaxy');
		$company = new Company('Samsung');
		$gsm= new Gsm('Ntc');
		$os= new OperatingSystem('6.0');

		//all this things comes from controller
		
		$new_smartphone = array('device_id' => $device_id,
								'type' 	=> $array['type'],
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


		if ($new_smartphone['type']=='smartphone') {
			$final_product= $this->smart_phone->create($new_smartphone);
			
		}
		elseif ($new_smartphone['type']=='nonsmartphone') {

			$final_product= $this->non_smart_phone->create($new_smartphone);
		}
		else{

			$final_product= $this->tablet->create($new_smartphone);
		}
		
		//all the process of building phone with raw material , ie assembly

		return $final_product;

	}


}


