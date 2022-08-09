<?php

#03

// $a = 5;
// $b = 12;
// $c = 10;
// $d = 7;
// $e = ($a * $b) + $c * $d / $a;

// print $e; //74


#04 

// $b = false;

// if ($b = true) {
//     echo 'true';
// } else {
//     echo 'false';
// }

// true

#05 

// for ($x = 1; $x <= 2; $x++) {
//     for ($y = 1; $y <= 3; $y++) {
//         if ($x == $y) continue;
//         echo "x = {$x} y = {$y}" . PHP_EOL;
//     }
// }

// x = 1 y = 2
// x = 1 y = 3
// x = 2 y = 1
// x = 2 y = 3


#08 

// function modifyArray(&$array)
// {
//     foreach ($array as &$value) {
//         $value = $value + 2;
//     }

//     $value = $value + 3;
// }

// $array = array(1, 2, 3);
// modifyArray($array);
// print_r($array);

// Array
// (
//     [0] => 3
//     [1] => 4
//     [2] => 8
// )


#09

// $a = array(1, 2, 3);
// $b = array(1 => 2, 0 => 1, 2 => 3);
// $c = array('a' => 1, 'b' => 2, 'c' => 3);

// var_dump($a == $b); //true
// var_dump($a === $b); // false
// var_dump($a == $c); // false


// #11 

// function magic($p, $q)
// {
//     return ($q == 0) ? $p : magic($q, $p % $q);
// }

// echo magic(20, 10); // 10


#19

// echo ((0.7 + 0.1) * 10);
// output : 8
// echo ((0.6 + 0.1) * 10);
// output : 7

// echo (int) ((0.7 + 0.1) * 10);
// output : 7
// echo (int) ((0.6 + 0.1) * 10);
// output : 7


#37 

$a = 20;

function myFunction($b)
{
    $a = 30;
    global $a, $c;
    return $c = $b + $a; // 40 + 20
}

echo myFunction(40) + $c; // 60 + 60
