<?php

namespace Mobile\Domain;


class Device{
	
	protected $battery;
	protected $screen;
	protected $memory;

	protected function get_battery(){
		return $this->battery;
	}

	protected function get_screen(){
		return $this->screen;
	}

	protected function get_memory(){
		return $this->memory;
	}
	
	protected function set_battery($value){
		$this->battery=$value;
	}

	protected function set_screen($value){
		$this->screen=$value;
	}

	protected function set_memory($value){
		$this->memory=$value;
	}


}
