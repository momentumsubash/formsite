<?php

namespace Mobile;
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
	function __construct( Mobile\Device $device, Movile\SmartPhone $smart_phone)
	{
		$this->device = $device;
		$this->SmartPhone = $smart_phone;
	}

	public function build($new_smartphone){

		$raw_phone= $this->smart_phone->detail();s
		//all the process of building phone with raw material , ie assembly

		$phone_entities = self::assemble($raw_phone);
		//other functianilities of building stuff//
		return $phone_entities;

	}


}

$raw_phone= $smart_phone->detail

