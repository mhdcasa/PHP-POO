<?php




class Car{
	public $color;
	public $model;
	public $mark;


	final public function MethodCar($col,$mod,$mrk){ //mli kanzid le mot FINAL ma kaykhasnich n7at les methode 
		//f autres class parce que déja dart liha FINAL ma n9darch nzid nmodifi fiha 
		$this->color = $col;
		$this->model = $mod;
		$this->mark  = $mrk;

		echo "this color is ".$this->color;
	}
}



class bus extends  Car{



}
$freindCar = new bus;
$freindCar->MethodCar("yellow",1995,"mustibushi");
echo "<pre>";
print_r($freindCar);
echo "</pre>";



$myCar = new Car();
$myCar->color="red";
$myCar->MethodCar("green",1992,"renault");
echo "<pre>";
echo  print_r($myCar);
echo "</pre>";




?>