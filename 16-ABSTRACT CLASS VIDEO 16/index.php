<?php


// Abstract class en arab hiya "MOjarada" ya3ni mojarad mn function kandiroh juste bach n héritiw mno
// Abstract class darori nkhdam b  les methodes dyalha

//ABSTRACT CLASS MA KAN9DARCH NDIR LIHA INSTANCIATION 
//O ILA BGHIT N AFFICHER LES PROPRIETES LI FIHA KHASNI NDIR CLASS 
//FILS O NDIR EXTEND L CALSS PARENT (LI GHADA TKON ABSTRAIT)
//METHOD 7TA HIYA TA9DAR TKON ABSTRAIT O KA NDECLAIRIHA B HAD TARI9A 
// abstract function functionAbstratctMethod($name);
// Abstract function ma kandir fiha walo justes les parametres homa li kan7at fiha ma katkon wastha 
//la condition if la ech la walo aslan ma kandirch had les ccolades {}



abstract class classParent{
	public $ram="2GB";

	public function functionClassParent(){
		echo "hey class parent</br>";
	}
	
	abstract function functionAbstratctMethod($name);
};




class childer extends classParent{
	public $name_product;
	public function functionAbstratctMethod($name){
		$this->name_product = $name;
	}

}




$object = new childer();
$object->functionAbstratctMethod('danooooone');
echo $object->name_product;
echo"<pre>",print_r($object),"</pre>";





class classChild extends classParent{
	public function functionAbstratctMethod($name){
		$this->name= $name;
	}
}



$objectClassChild = new classChild();
$objectClassChild->ram="16GB";
$objectClassChild->functionClassParent();
$objectClassChild->functionAbstratctMethod("mehdi");

echo "<pre>";
print_r($objectClassChild);
echo "</pre>";



class classChildTwoo extends classParent{
	public $owner;
	public function functionAbstratctMethod($firtsname){
		$this->owner = $firtsname;
		echo "Hello " .$firtsname;
	}
}

$objectClassChildTwoo = new classChildTwoo();
$objectClassChildTwoo->ram = "30GB";
$objectClassChildTwoo->functionAbstratctMethod("issam");



echo "<pre>";
print_r($objectClassChildTwoo);
echo "</pre>";


?>