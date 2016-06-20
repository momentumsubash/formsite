<?php

namespace Mobile\Service;

/**
* 
*/
class ServiceProvider 
{
	protected $device;
	protected $smart_phone;
	protected $non_smart_phone;
	protected $tablet;
	
	function __construct( 
							Mobile\Device $device, 
							Mobile\SmartPhone $smart_phone,
							Mobile\NonSmartPhone $non_smart_phone,
							Mobile\Tablet $tablet
						)
	{
		$this->device = $device;
		$this->SmartPhone = $smart_phone;
		$this->SmartPhone = $non_smart_phone;
		$this->SmartPhone = $tablet;
	}

	public function fix($specification){

		if ($specification['change']=='screen') {

			$final_device= self::change_screen($specification);
			# code...
		}
		if ($specification['change']=='memory') {

			$final_device= self::change_memory($specification);
			# code...
		}
		return $final_device;
	}
	private static change_screen($specification){
		//change the existing screen size,
		$device->screen=$specification['screen'];
		 return $device;

	}
	private static change_memory($specification){
		//change the existing screen size,
		$device->screen=$specification['screen'];
		return $device;
	}


}