<?php

class WebsendThaiFixed
{

	public $websend;
	
	public function __construct($host, $password, $port = 4445){
		$this->websend = new Websend($host, $port);
		$this->websend->password = $password;
	}

	public function connect(){
		return $this->websend->connect();
	}

	public function sendCommand($command){

		$array = [ "command" => $command ];

		$command_encode = str_replace(" ", "$", json_encode($array));

		$this->websend->doCommandAsConsole('WebsendThaiFixed '.$command_encode.' ');

	}

}