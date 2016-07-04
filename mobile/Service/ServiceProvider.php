<?php

namespace Mobile\Service;

/**
* 
*/
use Domain\Device;
use Domain\SmartPhone;
use Domain\NonSmartPhone;
use Domain\Tablet;

class ServiceProvider 
{
	
	protected $smart_phone;
	protected $non_smart_phone;
	protected $tablet;
	
	function __construct( 
							// Mobile\Device $device, 
							// Mobile\SmartPhone $smart_phone,
							// Mobile\NonSmartPhone $non_smart_phone,
							// Mobile\Tablet $tablet
						)
	{
		// $this->device = $device;
		// $this->SmartPhone = $smart_phone;
		// $this->SmartPhone = $non_smart_phone;
		// $this->SmartPhone = $tablet;
	}

	public function fix(Device $device){


		if($device['type']=='smartphone'){

		}


		if ($device['change']=='screen') {

			$final_device= self::change_screen_smart_phone($device);
			# code...
		}
		if ($device['change']=='memory') {

			$final_device= self::change_memory_smart_phone($device);
			# code...
		}
		
		}

		if($device['type']=='nonsmartphone'){

		}


		if ($device['change']=='screen') {

			$final_device= self::change_screen_non_smart_phone($device);
			# code...
		}
		if ($device['change']=='memory') {

			$final_device= self::change_memory_non_smart_phone($device);
			# code...
		}
		
		}


		if($device['type']=='tablet'){

		}


		if ($device['change']=='screen') {

			$final_device= self::change_screen_tablet($device);
			# code...
		}
		if ($device['change']=='memory') {

			$final_device= self::change_memory_tablet($device);
			# code...
		}
		
		}


	private static change_screen_smart_phone($device){
		//change the existing screen size,
		$smartphone= new SmartPhone();
		$smartphone->screen=$device['screen'];
		 return $smartphone;

	}
	private static change_memory_smart_phone($device){
		//change the existing screen size,
		$smartphone= new SmartPhone();
		$smartphone->memory=$device['memory'];
		return $smartphone;
	}
	private static change_screen_non_smart_phone($device){
		//change the existing screen size,
		$non_smartphone= new NonSmartPhone();
		$non_smartphone->screen=$device['screen'];
		 return $non_smartphone;

	}
	private static change_memory_non_smart_phone($device){
		//change the existing screen size,
		$non_smartphone= new NonSmartPhone();
		$non_smartphone->memory=$device['memory'];
		return $non_smartphone;
	}
	private static change_screen_tablet($device){
		//change the existing screen size,
		$tablet= new Tablet();
		$tablet->screen=$device['screen'];
		 return $tablet;

	}
	private static change_memory_tablet($device){
		//change the existing screen size,
		$tablet= new Tablet();
		$tablet->screen=$device['screen'];
		return $tablet;
	}
	
}