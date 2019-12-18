<?php


// GET KAYRAJA3 LIYA GHIR LES VALEURS DYAL LES PROPRIETES LI PRIVATE OLA MAKAYNAINCH ZA3MA 
//KANDIRHOM KHARAJ MN CLASS YA3NI JDAD 3LA LCLASS KAY9BAL COMME PARAMETRES UNE SEULE PARAMETRES  ENTRE __get()



echo "<h1 style='color:red'>Test pour les getter</h1>";
class device{
	public  $ram;
	public  $screen;
	private $test;


	public function __get($clr){
		echo $this->test= $clr;
	}
}

$iphone = new device();
$iphone->ram 	= "30 GB";
echo  $iphone->red;




echo "<pre>";
print_r($iphone);
echo "</pre>";




// SET KATRAJA3 LIYA VALEUR O LPROPRIETES LI KAYKONO JDAD 3LA LCLASS YA3NI KAN9DAR N7AT 1 VALEUR JDID O SET KAT9BAL 2 PARAMETRES 
// LAWAL KAYKON HOWA LE NOM DYAL PARAMETRES 
// TANI KAYKON VALEUR DYAL PARAMETRES

echo "<h1 style='color:red'>Test pour les Setters</h1>";

class car{
	public  $color;


	public function __set($spd,$valsped){
		echo "the property for this car is ".$spd."</br>";
		echo "and the value the speed is " .$valsped;
		
	}
}

$mycar = new car();
$mycar->color 	= "yellow";
$mycar->speed="300km/h";






echo "<pre>";
print_r($mycar);
echo "</pre>";
?>