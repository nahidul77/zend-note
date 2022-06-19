<?php

/**
 * __set() method called when we try to set a private or non existing properties.
 * using __get() or __set() to avoid fatal error instead showing message or do somethings
 */

class student{
	
	private $name;

	public function hello(){
		echo $this->name;
	}

	public function __get($property)
	{
		echo "Your are trying to access Non existing or private property ($property)\n";		
	}

	public function __set($property, $value)
	{
		if(property_exists($this , $property)){
			$this->$property = $value;
		}else{
			echo "Property does not exist : $property";
		}
	}
}

$test = new student();
$test->name = "Yahoo Baba";

$test->hello();
