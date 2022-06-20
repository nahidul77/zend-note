<?php
class MyClass{
	public $test;
}

if(property_exists('MyClass','test')){
	echo "This property is exist.";
}else{
	echo "This property is not exist.";
}
