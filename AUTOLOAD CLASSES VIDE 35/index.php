<?php

//AUTO LOAD CLASS HAD FUNCTION KATMCHI TLOADI LIYA GA3 LES CLASS LI KAYNIN F 1 DOSSIER O KHAS HADO LES FICHIER LI KAYNIN WAST MAN DOSSIER(CLASSES) IKON 3NDHOM LE MEME NOM DYAL LCLASS MATALAN 3NDI F 1 DOSSIER {class1.ph NOM DYAL CLASS LI kayn f had classs1.php kahso ikon smito class1}

spl_autoload_register(function($nameclass){
	// $nameclass = "testing1";
	// require "classes/".$nameclass.".php";
	require "testclass/".$nameclass.".php";
	var_dump($nameclass);
	// echo "classes/".$nameclass.".php"."<br>";
	echo "kjkj";
});

$iphone = new testclass();

echo "<pre>";
print_r($iphone);
echo "</pre>";



?>