<?php

namespace Mobile\ValueObject;

class Cdma {

	public function __construct($cdma = null) {

		$this->check_for_validity($cdma);

		$this->Cdma = $cdma;
	}

	private function check_for_validity($cdma = null) {

		if($cdma == null || $cdma == '') {

			throw new \Exception("cdma cannot be left blank");
		}
	}
	
	public function get_cdma(){
		return $this->cdma;
	}
	
}

















