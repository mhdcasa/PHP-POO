<?php


require 'iphone.php';
require 'lg.php';
require 'sony.php';




$iphone =  new iphone\createPhone();
$iphone->sayHelloPhone();

echo "<pre>";
print_r($iphone);
echo "</pre>";


echo "<h1 style='color:red'>Exemple de SUBNAMESPACE</h1>";


$hardward = new iphone\hardward\createPhone();
echo "<pre>";
print_r($hardward);
echo "</pre>";
?>