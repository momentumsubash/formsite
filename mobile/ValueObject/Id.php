<?php
namespace Mobile\ValueObject;

class Id {

	protected $id;

	public function __construct($str = null) {

		if(!is_null($str)) {

			$rand = mt_rand(100000000000, 999999999999);
			$this->id = $str."_".$rand;
		}
	}
	public function get_id() {

		return $this->id;
	}
}