<?php


// PROPRIETE ILA KANT MDECLARYA B STATIC MA N9DARCH NDKHOL 3LIH B OBJECT

// 3AKS METHOD WAKHA TKON STATIC N9DAR NDKHOL 3LIHA B OBJECT

// N9dar ndkhol 3la static mn ay blas 3ndi f projet dyali


//STATIC KATKHALINI N3AYAT 3LA LES PARAMETRES(ATTRIBUTES) BLA MA IKON 3NDI OBJET 

class device{
	public $ram="32 GB";
	public static $name = "Mehdi";

	public static function sayhello(){
		return "hello Mehdi";
	} 

}

echo device::$name;
echo "<br>";
echo device::sayhello();

$myIphone = new device;
echo "<br>",$myIphone->sayhello();

?>