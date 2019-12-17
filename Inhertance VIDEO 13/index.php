<?php


class voiture{
	public $color="green";
	public $model;
	public $mark;
	private $nbrPlace;

	const VOLANT="circle";


	public function carMehdi($mod,$nbr){
		$this->nbrPlace=$nbr;
		$this->model= $mod;
		if ($this->model==1998) {
			echo "this model is ".$this->model;
		}else{
			echo "this is not model what is you serach abou it</br>";
		}
	}

}

$mycar = new voiture();
$mycar->color="red";
$mycar->model=1997;
$mycar->mark="dacia";
$mycar->carMehdi(1999,9);
echo voiture::VOLANT."<br>";
echo $mycar::VOLANT."<br>";

echo "<pre>";
print_r($mycar);
echo "<pre>";



?>
<h1 style="color:red">class herité depuis un parent class</h1>
<?php
class quatrequatre extends voiture
{
	
	public $height="1 metre";
	private $vitesse;

		public function carAymen($mod,$nbr,$hei){
		$this->height=$hei;	
	}

}

$carFreind=new quatrequatre();

$carFreind->carAymen(22,122,"2metre");

echo "<pre>";
print_r($carFreind);
echo "</pre>";



?>