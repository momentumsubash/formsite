<?php

namespace Mobile\ValueObject;

class Company {

	public function __construct($company = null) {

		$this->check_for_validity($company);

		$this->company = $company;
	}

	private function check_for_validity($company = null) {

		if($company == null || $company == '') {

			throw new \Exception("company cannot be blank");
		}
	}
	
	public function get_company(){
			return $this->company;
		}
		
		
}