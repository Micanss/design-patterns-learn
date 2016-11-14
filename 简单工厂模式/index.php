<?php 
/**
* cat
*/
class Cat
{
	
	function __construct()
	{
		echo "I am Cat class <br>";
	}
}

class Dog
{
	
	function __construct()
	{
		echo "I am Dog class <br>";
	}
}

/**
* factory
*/
class Factory
{
	
	public static function CreateAnimal($name){
		if ($name == 'cat') {
			return new Cat();
		} elseif ($name == 'dog') {
			return new Dog();
		}
	}
}

$animal = Factory::CreateAnimal('cat');
$animal = Factory::CreateAnimal('dog');