<?php
class myClass{
	public $var1;
	public $var2 = "hello";
	public $var3 = 100;
	private $var4;
	
	function __construct(){
		$this->var1 = "wow";
		$this->var2 = "Yahoo";
		print_r(get_class_vars(__CLASS__));
	}
}

$obj = new myClass();

$class_vars = get_class_vars(get_class($obj));

print_r($class_vars);
