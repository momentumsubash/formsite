<?php

namespace Mobile;


abstract class Device{
	
	public $battery;
	public $screen;

	public function get_battery(){
		return $this->battery;
	}

	public function get_screen(){
		return $this->screen;
	}

	
	public function set_battery($value){
		$this->battery=$value;
	}
	public function set_screen($value){
		$this->screen=$value;
	}
}
