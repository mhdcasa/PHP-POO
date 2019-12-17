<?php


class Appledevice{

public $ram;
public $ecran;
public $batterie;
public $tactile;

}

$iphone7 = new Appledevice();
$iphone7->ram="2 gb";
$iphone7->ecran="16 pouce";
$iphone7->batterie="bonetat";
$iphone7->tacticle="nice";


echo "<pre>";
echo var_dump($iphone7);
echo "</pre>";

$iphone6 = new Appledevice();
$iphone6->ram="26gb";
$iphone6->ecran="32pouce";
$iphone6->batterie="nicestate";
$iphone6->chargeur="sdsd";
$iphone6->tactile="yes";

echo "<pre>";
echo var_dump($iphone6);
echo "</pre>";


class madeCar{
	public $color="white";
	public $model="2001";
	public $accessoir="assiste";
}

$dacia = new madeCar();
$dacia->color="red"; //hado kaytsamaw des valeurs par default 
$dacia->model="1992";
$dacia->accessoir="clime";

echo "<pre>";
echo var_dump($dacia);
echo "</pre>";

$renault = new madeCar();

echo "<pre>";
echo var_dump($renault);
echo "</pre>";



?>