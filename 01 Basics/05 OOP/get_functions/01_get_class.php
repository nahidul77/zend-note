<?php
class myclass{
	function name(){
		echo "Class Name : " . get_class($this) . "\n";
	}
}

$obj = new myclass();

$obj->name();

echo "Class Name is : " . get_class($obj);
