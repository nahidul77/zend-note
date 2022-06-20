<?php
class MyClass{
	
}

if(class_exists('MyClass')){
	//echo "This class is exist.";
	$obj = new MyClass();
}else{
	echo "This class is not exist.";
}
