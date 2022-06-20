<?php
class MyClass{
	
}

$obj = new MyClass();

if(is_a($obj,'MyClass')){
	echo "This Object is of Class MyClass.";
}else{
	echo "This Object is not of Class MyClass.";
}
