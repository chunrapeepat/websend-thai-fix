<?php

require 'Websend.php';
require 'WebsendThaiFixed.php';

$WebsendThaiFixed = new WebsendThaiFixed("127.0.0.1","password", 5678);

if($WebsendThaiFixed->connect()){

	$WebsendThaiFixed->sendCommand('say ภาษาไทย อิอิ');

	echo '[WebsendThaiFixed] Send command successful.';

}else{
	echo '[WebsendThaiFixed] Failed to connect.';
}