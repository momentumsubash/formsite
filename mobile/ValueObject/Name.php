<?php
	namespace Mobile\ValueObject;

	class Name {

		public function __construct($name = null) {

		$this->check_for_validity($name);

		$this->name = $name;
	}

	private function check_for_validity($name = null) {

		if($name == null || $name == '') {

			throw new \Exception("name Cannot be left blank");
		}
	}

		public function get_name(){
				return $this->name;
			}
			
}