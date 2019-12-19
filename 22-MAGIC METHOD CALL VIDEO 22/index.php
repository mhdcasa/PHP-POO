<?php
// CALL KANKHDAM BIHA ILA BGHIT N3AYAT L1 METHODE HIYA ASLAN MAKAYNACH 3NDI F CLASS 
// CALL KAT9BAL 2 PARAMAETRES
// LAWAL LE NOM DYAL METHODE 
// TANI LES PARAMETRES LI GHAYKONO WAST METHODE O BIEN LA FONCTION	
	class device{
		public $ram;
		public $name;

		public function __call($nom,$params){
			echo "this is method [ ".$nom." ] is not found</br>";
			print_r($params);
			echo "<br>";
		}
	}
$iphone = new device("mehdi");
$iphone->ram="20GB";
$iphone->methodNotFound("mehdi","bac");
$iphone->methodNotFound1("mehdi","bac","sdksmlkdmlskd");
echo "<pre>";
print_r($iphone);
echo "</pre>";
?>