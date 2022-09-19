<?php

#8_______________________________

// $a = array('a', 'b' => 'c');
// echo property_exists((object) $a, 'a') ? 'true' : 'false';
// echo ' - ';
// echo property_exists((object) $a, 'b') ? 'true' : 'false';

// output : false - true


#25__________________________

// namespace MyFrameworkDB;

// class MyClass
// {
//     static function myName()
//     {
//         return __METHOD__;
//     }
// }
// print MyClass::myName();  //MyFrameworkDB\MyClass::myName


#29___________________________

// $foo = array(true, '0' => false, false => true);

// print_r($foo);

// Array
// (
//     [0] => 1
// )


#35______________________________

// function increment(&$val)
// {
//     return $val + 1;
// }
// $a = 1;
// echo increment($a);  //2
// echo increment($a); //2


#37________________________________

// class Number
// {
//     private $v = 0;
//     public function __construct($v)
//     {
//         $this->v = $v;
//     }
//     public function mul()
//     {
//         return function ($x) {
//             return $this->v * $x;
//         };
//     }
// }
// $one = new Number(1);
// $two = new Number(2);
// $double = $two->mul()->bindTo($one);
// echo $double(5);  //5


#extra_______________________________________

// $a = range(1, 100);

// function manual_array_filter(array $arr, callable $func)
// {
//     $final_array = [];

//     foreach ($arr as $value) {
//         if ($func($value)) {
//             $final_array[] = $value;
//         };
//     }

//     return $final_array;
// }

// function callback_array_filter($number)
// {
//     return $number % 2 == 0;
// }

// $check = manual_array_filter($a, 'callback_array_filter');
// print_r($check);
