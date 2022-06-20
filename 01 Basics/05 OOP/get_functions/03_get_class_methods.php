<?php
class myClass{
	function __construct(){
		print_r(get_class_methods($this));
	}
	
	function myfunc1(){
		
	}
	
	private function myfunc2(){
		
	}
}

$obj = new myClass();

$class_methods = get_class_methods('myClass');

print_r($class_methods);

foreach($class_methods as $methods){
	echo $methods . "\n";
}
