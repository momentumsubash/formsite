<?php

namespace Mobile\Domain;
use Domain\Device;
use ValueObject\Id;
use Name;
use Company;
use OperatingSystem;


/**
* 
*/
class NonSmartPhone extends Device
{	

	private $name;
	private $os;
	private $processor;
	private $body;
	
	function __construct( 
						)
	{
		
		
	}

	public function set_name(Name $name) {
		$this->name = $name;
	}

	public function set_os(OS $os) {
		$this->os = $os;
	}

	public function set_processor(Processor $processor) {
		$this->processor = $processor;
	}

	public function set_memory(memory $memory) {
		$this->memory = $memory;
	}

	public function set_body(Body $body) {
		$this->body = $body;
	}
	


	public function create($array){

		$raw_phone = array('device_id' => $array['device_id'] ,
							'name' => $array['name'],
							'mode' => $$array['mode'],
							'os' => $array['os'],
							'processor' => $array['processor'],
							'memory' => $array['memory'],
							'body' => $array['device_id'],	
							 );

		$phone= self::assemble($raw_phone)

		return $phone;


	}

	private static function assemble($raw_phone){
		//assembling all the information 
		$non_mart_phone = new NonSmartPhone();

		$non_mart_phone->set_name($raw_phone['name']);
		$non_mart_phone->set_os($raw_phone['os']);
		$non_mart_phone->set_processor($raw_phone['processor']);
		$non_mart_phone->set_memory($raw_phone['memory']);
		$non_mart_phone->set_body($raw_phone['body']);
		

		return $non_mart_phone;

	}
		
}