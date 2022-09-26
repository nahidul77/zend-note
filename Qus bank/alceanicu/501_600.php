<?php

#506_________________________

// function foo(string $a, ?string $b): ?int
// {
//     return $b ? $a <=> $b : null;
// }
// echo foo('PHP', 7); //1


#515_________________________

// function myfunction()
// {
//     list($string) = func_get_args();
//     // $string = func_get_arg(0);
//     print $string;
// }
// myfunction("Hello, World!");


#517________________________

// $array = array(1 => 0, 2, 3, 4);
// $slice = array_slice($array, 3);
// $merge = array_merge(array('x'), $slice);
// array_splice($array, 3, count($array), $merge);
// print_r($array);

// Array
// (
//     [0] => 0
//     [1] => 2
//     [2] => 3
//     [3] => x
//     [4] => 4
// )

#537__________________________

// var_dump(
//     't' == 't', // Notice
//     1 === "1time",
//     "top" == 0,
//     "top" === 0,
//     1 == "1time"
// );

// bool(true)
// bool(false)
// bool(false)
// bool(false)
// bool(false)

#542_______________________

// function oranges(&$oranges = 17)
// {
//     $oranges .= 1;
// }
// $apples = 5;
// oranges($apples);
// echo $apples++; // 51


#546________________________

// function a($number) {
//     return (b($number) * $number);
// }
// function b(&$number) {
//     return ++$number;
// }
// echo a(5); //36

#549________________

// define('FOO', 10);
// $array = array(10 => FOO, "FOO" => 20);
// print $array[$array[FOO]] * $array["FOO"];

#output 200

#564_____________________

// $a = [0, 1, 2];
// foreach ($a as $val) {
//     var_dump(current($a));
// }

// int(0)
// int(0)
// int(0)

#582_______________________

// $a = "PHP";
// $a++;

// echo $a; //output : PHQ


#583____________________

// $a = '1';
// $b = &$a;
// $b = "2$b";
// echo $a . ", " . $b; //21, 21


#584__________________

// $array = ['a' => 'John', 'b' => 'Coggeshall', 'c' => ['d' => 'John', 'e' => 'Smith']];
// function display($item, $key)
// {
//     print "$key => $item\n";
// }
// array_walk_recursive($array, "display");


// a => John
// b => Coggeshall
// d => John
// e => Smith

#597_________________________

// function &find_variable(&$one, &$two, &$three)
// {
//     if ($one > 95 && $one < 100) return $one;
//     if ($two > 10 && $two < 20) return $two;
//     if ($three > 1 && $three < 100) return $three;
// }

// $one = 90;
// $two = 60;
// $three = 89;

// $var = &find_variable($one, $two, $three);  // 89
// $var++;
// echo "$one - $two - $three";  //90 - 60 - 90
