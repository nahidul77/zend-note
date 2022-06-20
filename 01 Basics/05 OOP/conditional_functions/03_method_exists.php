<?php
class MyClass{
	public function MyMethod(){
		
	}
}

$obj = new MyClass();

if(method_exists($obj,'MyMethod')){
	echo "This method is exist.";
		
}else{
	echo "This method is not exist.";
}
