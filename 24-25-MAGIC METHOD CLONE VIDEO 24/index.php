<?php

echo "<h1 style='color:red'>Exemple CLONE 1</h1>";
	
	class device {
		public $ram;
		public $name;

		public function __construct($n){
			$this->name = $n;

		}
	}

$object1Dvice = new device("mehdi");

$object2Device = clone $object1Dvice;

$object2Device->name="issam";

echo "<pre>";
print_r($object1Dvice);
echo "</pre>";


echo "<pre>";
print_r($object2Device);
echo "</pre>";

echo "<h1 style='color:red'>Exemple CLONE 2</h1>";

class Foo
{
	public $ram="20gb";
}

class Bar
{
  public function __construct(Foo $foo)
  {
    $this->test = $foo;
  }
}

$foo = new Foo();
$bar = new Bar($foo);

echo "<pre>";
print_r($bar);
echo "</pre>";



?>