<?php

trait classParent1{
	public $ram;

	public function feature(){
		echo "hello  classParent1";
	}

}

trait classParent2{
	public $name;

	public function feature(){
		echo "hello  classParent2";
	}
}

trait classParent3{
	public $screen;
}

class heriteAllClass{
	use classParent1,classParent2{
		//BACH N7AT 1 LMETHODE F 1 ALIAS(PSEUDO)
		//[TRAITNAME] [::] [METHODENAME]  [KEYWORD] [AS] [NEW NAME]

		classParent1::feature as myfeature;

		//BACH NPECIFIE INA TRAIT BGHIT NJIB MNHA METHOD KANDIR HAD TARI9A
		//[TRAITNAME] [::] [METHODENAME]  [KEYWORD] [INSTEADOF] [OTHER METHIDNAME]
		classParent2::feature insteadof classParent1;
	}

	use classParent3;
}


$iphone = new heriteAllClass();
echo "<pre>";
print_r($iphone);
echo "</pre>";


echo "<h1>Si j'ai plusieurs méthodes avec le méme nom</h1>";

$iphone = new heriteAllClass();
$iphone->myfeature();
echo "<pre>";
print_r($iphone);
echo "</pre>";

?>