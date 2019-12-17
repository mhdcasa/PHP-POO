<?php


class user{

	public $right;
	public $name;
	public $mail;
	public $phone;

	function namefunction(){
		echo "hello im method for the admin user";
	}



}
$admin = new user();
$admin->right=0;
$admin->name="ahmed";
$admin->mail="test@admin.com";
$admin->phone="0522656454";
$admin->namefunction();

echo "<pre>";
echo var_dump($admin);;
echo "</pre>";



$visiteur = new user();
$visiteur->right=1;
$visiteur->name="issam";
$visiteur->mail="test@visiteur.com";
$visiteur->phone="069898988";

echo "<pre>";
echo var_dump($visiteur);
echo "</pre>";



?>