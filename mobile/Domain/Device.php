<?php

namespace Mobile\Domain;


abstract class Device{
	
	public $battery;
	public $screen;
	public $memory;

	public function get_battery(){
		return $this->battery;
	}

	public function get_screen(){
		return $this->screen;
	}

	public function get_memory(){
		return $this->memory;
	}
	
	public function set_battery($value){
		$this->battery=$value;
	}

	public function set_screen($value){
		$this->screen=$value;
	}

	public function set_memory($value){
		$this->memory=$value;
	}


}
