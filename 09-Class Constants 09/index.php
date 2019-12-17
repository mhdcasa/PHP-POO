<?php

// CONSTANT KANDIRHA ILA BGHIT CHI PROPRIETE IKON 3NDI STABLE MA NBADALCH FIH O MA NA3TICH LE DROIT BACH IBADLO LIYA FIH F LOBJET

// MLI KANBGHI NKHDM BIH F CHI FUNCTION OLA METHODE (machi b7al variable kandir $this->nom_variable noooon constant kandir lih self::nom_constant)
// WA DABA GOOOOL LIYA A BO9AL KIAFACH NA9DAR NAFFCIHER UN CONSTANT
// SAHLA A SA7BI 3NDI 2 METHODES 
// LAWLA KAN3AYAT BLCLASS (ECHO NOMCLASS::NOMCONSTANT)
// TANYA KAN3AYAT LIH B LOBJET (ECHO NOMOBJET::NOMCONSTANT)




class voiture{
	public $color;
	public $vitess;
	public $porte;

	const MARK = "renault";


	public function selectMark ($mark){
		if (self::MARK == $mark) {
			echo "this mark ". $mark ." is available"."</br>";
		}else{
			echo "this mark ". $mark ." is not available"."</br>";
		}

	}
}
$renault = new voiture();
$renault->color="red";
$renault->vitess=355;
$renault->porte=4;
$renault->selectMark("mercedes");

echo "<pre>";
echo var_dump($renault);
echo "</pre>";




echo voiture::MARK."<br/>";
echo $renault::MARK;
?>