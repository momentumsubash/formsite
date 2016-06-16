<?php

namespace Mobile\ValueObject;

class Company {
	
	public function get_company(){
			return $this->company;
		}
		

		public function set_company($value){
			$this->company=$value;
			
		}
}