<?php
/**
 * __invoke() method called when object called as a function
 */
class calculation{
	public $a, $b;

	public function __construct($a, $b){
		$this->a = $a;
		$this->b = $b;
	}

	public function __invoke(){
		echo $this->a * $this->b;
	}
}

$obj = new calculation(20,30);

$obj();
