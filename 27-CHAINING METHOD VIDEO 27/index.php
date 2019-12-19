<?php


class device{

	public $attr = 0;
	public function pressPower(){
		$this->attr++;
		echo "the phone is powered<br>";
		return $this;
	}

	public function bootPhone(){
		echo "the phone is Booted<br>";
		return $this;
	}

	public function sayHello($n){
		echo "Hello ".$n."<br>";
		return $this;
	}

}

$phone = new device();
$phone->pressPower()->bootPhone()->sayHello("mehdi");



?>