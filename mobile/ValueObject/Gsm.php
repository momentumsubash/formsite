<?php

namespace Mobile\ValueObject;

class Gsm {

	public function __construct($gsm = null) {

		$this->check_for_validity($gsm);

		$this->gsm = $gsm;
	}

	private function check_for_validity($description = null) {

		if($gsm == null || $gsm == '') {

			throw new \Exception("gsm cannot be left blank");
		}
	}
	
	public function get_gsm(){
		return $this->gsm;
	}
	
}