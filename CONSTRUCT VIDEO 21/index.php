<?php 
	
// CONTSRUCT KAN9DAR N AFFCIHEIR CHNO WAST MANHA BLA MA NDIR OBJET



	class device{
		public $ram;
		public $name;

		public function __construct($nom){
			$this->name = $nom;
			echo "hello ". $nom;
		}
	}



class child extends device{

}	

$iphone = new device("mehdi");
$iphone->ram="20GB";

echo "<pre>";
print_r($iphone);
echo "</pre>";

$apple = new child("issam");



?>