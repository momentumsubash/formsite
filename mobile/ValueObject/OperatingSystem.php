<?php

namespace Mobile\ValueObject;

class OperatingSystem {

	public function __construct($os = null) {

		$this->check_for_validity($os);

		$this->os = $os;
	}

	private function check_for_validity($os = null) {

		if($os == null || $os == '') {

			throw new \Exception("OperatingSystem Cannot be left blank");
		}
	}
	
	public function get_os(){
		return $this->os;
	}
	
}

















