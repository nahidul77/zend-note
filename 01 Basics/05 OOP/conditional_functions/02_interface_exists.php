<?php
interface MyInterface{
	
}

if(interface_exists('MyInterface')){
	echo "This interface is exist.";
	class MyClass implements MyInterface{
	
	}	
}else{
	echo "This interface is not exist.";
}
