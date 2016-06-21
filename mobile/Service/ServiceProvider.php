<?php

namespace Mobile\Service;

/**
* 
*/
class ServiceProvider 
{
	
	protected $smart_phone;
	protected $non_smart_phone;
	protected $tablet;
	
	function __construct( 
							// Mobile\Device $device, 
							Mobile\SmartPhone $smart_phone,
							Mobile\NonSmartPhone $non_smart_phone,
							Mobile\Tablet $tablet
						)
	{
		// $this->device = $device;
		$this->SmartPhone = $smart_phone;
		$this->SmartPhone = $non_smart_phone;
		$this->SmartPhone = $tablet;
	}

	public function fix($specification){

		



		if($specification['type']=='smartphone'){

		}


		if ($specification['change']=='screen') {

			$final_device= self::change_screen_smart_phone($specification);
			# code...
		}
		if ($specification['change']=='memory') {

			$final_device= self::change_memory_smart_phone($specification);
			# code...
		}
		
		}

		if($specification['type']=='nonsmartphone'){

		}


		if ($specification['change']=='screen') {

			$final_device= self::change_screen_non_smart_phone($specification);
			# code...
		}
		if ($specification['change']=='memory') {

			$final_device= self::change_memory_non_smart_phone($specification);
			# code...
		}
		
		}


		if($specification['type']=='tablet'){

		}


		if ($specification['change']=='screen') {

			$final_device= self::change_screen_tablet($specification);
			# code...
		}
		if ($specification['change']=='memory') {

			$final_device= self::change_memory_tablet($specification);
			# code...
		}
		
		}


	private static change_screen_smart_phone($specification){
		//change the existing screen size,
		$this->screen=$specification['screen'];
		 return $this;

	}
	private static change_memory_smart_phone($specification){
		//change the existing screen size,
		$this->memory=$specification['memory'];
		return $this;
	}
	private static change_screen_non_smart_phone($specification){
		//change the existing screen size,
		$this->screen=$specification['screen'];
		 return $this;

	}
	private static change_memory_non_smart_phone($specification){
		//change the existing screen size,
		$this->screen=$specification['screen'];
		return $this;
	}
	private static change_screen_tablet($specification){
		//change the existing screen size,
		$this->screen=$specification['screen'];
		 return $this;

	}
	private static change_memory_tablet($specification){
		//change the existing screen size,
		$this->screen=$specification['screen'];
		return $this;
	}
	return $this;


}