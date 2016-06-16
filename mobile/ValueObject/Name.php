<?php
	namespace Mobile\ValueObject;

	class Name {

		public function get_name(){
				return $this->name;
			}
			
			public function set_name($value){
				$this->name=$value;

			}

	}