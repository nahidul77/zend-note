<?php

//Depricated
// function __autoload($class){
// 	require "classes/" . $class . ".php";
// }

// function my_autoloader($class) {
//     include 'classes/' . $class . '.class.php';
// }

// spl_autoload_register('my_autoloader');

spl_autoload_register(function ($class) {
    require "classes/" . $class . ".php";
});
$test = new second();
$test1 = new first();
