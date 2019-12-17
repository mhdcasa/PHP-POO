<?php

// ENCAPSULATION HIYA PRIVATE

// ILA BGHIT NBAYAN HAD PROPRIETE LI HIYA PRIVATE MA NA9DARCH N AFFICHICHA PSKE HIYA PRIVATE DONC KANDAWZHA PARAMETRE F METHOD O N3TIHA 1 LA VALEUR DYAL HAD PARAMETRE APRES LINSTANCIATION


class voiture{
	public $color;
	public $vitess;
	public $porte;
	private $immatriculation;

	const MARK = "renault";


	public function selectMark ($mark,$imma){
		$this->immatriculation=$imma;
		if (self::MARK == $mark) {
			echo "this mark ". self::MARK ." is available with immatriculation Number ".$imma."</br>";
		}else{
			echo "this mark ". self::MARK ." is not available with this immatriculation Number".$imma."</br>";
		}

	}
}
$renault = new voiture();
$renault->color="red";
$renault->vitess=355;
$renault->porte=4;
$renault->selectMark("renault",55555);
// $renault->immatriculation=555555;

echo "<pre>";
echo var_dump($renault);
echo "</pre>";




echo voiture::MARK."<br/>";
echo $renault::MARK;
?>