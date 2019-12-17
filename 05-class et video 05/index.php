<?php


class AppleDevice {
	public $color ="red";
	private $ram;
	public $screensize;
}
$iphone6 = new AppleDevice();

	echo "<pre>";
	var_dump($iphone6);
	echo "</pre>";

$iphone7 = new AppleDevice();	

echo "<pre>";
var_dump($iphone7);
echo "</pre>";


?>