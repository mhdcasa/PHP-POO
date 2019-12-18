<?php 
//Magic Method
// CONTSRUCT KAN9DAR N AFFCIHEIR CHNO WAST MANHA BLA MA NDIR OBJET
// Methode __construct k t hérita liya une fois ndir héritage l function parent

//Destruct
//Called When object is Destroyed



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