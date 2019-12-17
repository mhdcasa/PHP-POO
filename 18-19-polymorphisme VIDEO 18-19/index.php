<?php


// INTERFACE TA9RIBAN B7AL ABSTARCT KANCHAD 1 CLASS KAN9ADO KAN7AT 
//FIH GA3 LES METHODES LI GHADI NA7TAJ O KANBDA NKHADAMHOM F KOL CLASS  
// O N3AMARHOM BACH BGHIT LES METHODES LI KAYKONO F INTERFACE CLASSES 
//MA KAYKONCH 3NDHOM BODY YA3NI MA KAN9DARCH NDIR 7TA FONCTION FIHOM 





Interface parentClass{ 
    public function function1($n);
	public function function2();
};

Interface parentClass1{ 
    public function function3($r);
};
 class childClass implements parentClass{
		public $name;
		public $ram;
		public function function1($n){
			$this->name = $n;
			echo "hello " . $n;

		}
	    public function function2(){
	    		
		}
		
		
}

$objectChild = new childClass();
$objectChild->ram = "16GB";
$objectChild->function1("mehdi");

echo "<pre>";
print_r($objectChild);
echo "</pre>";


?>