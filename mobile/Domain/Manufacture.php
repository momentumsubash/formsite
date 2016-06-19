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
	function __construct( 
							Mobile\Domain\Device $device, 
							Mobile\Domain\SmartPhone $smart_phone,
							Mobile\Domain\NonSmartPhone $non_smart_phone,
							Mobile\Domain\Tablet $tablet
						)
	{
		$this->device = $device;
		$this->SmartPhone = $smart_phone;
		$this->SmartPhone = $non_smart_phone;
		$this->SmartPhone = $tablet;
	}

	public function build($new_smartphone){


		if ($new_smartphone['type']=='smartphone') {
			$raw_phone= $this->smart_phone->detail();
			
		}
		elseif ($new_smartphone['type']=='nonsmartphone') {

			$raw_phone= $this->non_smart_phone->detail();
		}
		else{

			$raw_phone= $this->tablet->detail();
		}
		
		//all the process of building phone with raw material , ie assembly

		$phone_entities = self::assemble($raw_phone);
		//other functianilities of building stuff//
		return $phone_entities;

	}


}

	private static function assemble($raw_phone){
		//assembling all the information and storing in db


	}

