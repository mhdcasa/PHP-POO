<?php
// Pseudo variable

class voiture{
	public $color;
	public $vitess;
	public $porte;

	public function renaultProperties(){
		echo "hello renault "."</br>";
	}
	public function colorCar($choice_color){
		$this->color =$choice_color;

		if ($choice_color=="red") {
			echo "the color choice is ".$choice_color."<br>";
		}
			else{
				echo "this is not color choice"."<br>";
			}
	}


	public function selectColor(){
		if ($this->color == "red") {
			echo "this color ".$this->color." is available"."</br>";
		}else{
			echo "this color ".$this->color." is not available"."</br>";
		}
	}
}
$renault = new voiture();
$renault->color="red";
$renault->vitess=355;
$renault->porte=4;

$renault->renaultProperties();
$renault->colorCar("green");
$renault->selectColor();

echo "<pre>";
echo var_dump($renault);
echo "</pre>";


$dacia = new voiture();
$dacia->color="green";
$dacia->vitess=600;
$dacia->porte=2;

echo "<pre>";
echo var_dump($dacia);
echo "</pre>";




?>