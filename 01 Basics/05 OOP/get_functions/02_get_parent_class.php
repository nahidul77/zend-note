<?php
class abc{
	function name(){
		echo "Parent Class name : " . get_parent_class($this) . "\n";
	}
}

class xyz extends abc{
	
}

$obj = new xyz();

$obj->name();

echo "Parent Class name  is : " . get_parent_class('xyz');
