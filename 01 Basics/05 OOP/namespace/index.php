<?php

require 'products.php';
require 'testing.php';

function wow(){
	echo "Wow from Index File.<br>";
}

use pro\v1\command as cmd;

$obj = new cmd\product();
$obj1 = new cmd\product();
