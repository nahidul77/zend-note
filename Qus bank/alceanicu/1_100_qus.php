<?php

#03_________________________________

// $a = 5;
// $b = 12;
// $c = 10;
// $d = 7;
// $e = ($a * $b) + $c * $d / $a;
// print($e);

// output : 74


#06_____________________________

// for ($x = 1; $x <= 2; $x++) {
//     for ($y = 1; $y <= 3; $y++) {
//         if ($x == $y) continue;
//         print ("x=$x y=$y") . PHP_EOL;
//     }
// }

// Output : 

// x=1 y=2
// x=1 y=3
// x=2 y=1
// x=2 y=3


#09_______________________________

// $a = array(1, 2, 3);
// $b = array(1 => 2, 2 => 3, 0 => 1);
// $c = array('a' => 1, 'b' => 2, 'c' => 3);

// var_dump($a == $b);
// var_dump($a === $b);
// var_dump($a == $c);

// bool(true)
// bool(false)
// bool(false)

#12_____________________________

// echo strtotime("january1,1901"); 

// output : -2177452800;

#13_______________________________

// echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1995)); 

// output : Jan-01-1996

// echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1965));

// output : Jan-01-1966


#14______________________________

// $x = 25;
// while ($x < 10) {
//     $x--;
// }
// print($x);

// Output : 25


#19___________________

// echo (int)((0.1 + 0.7) * 10); //output : 7

#21___________________

// define('FOO', 10);
// $array = array(10 => FOO, "FOO" => 20);
// echo $array[$array[FOO]] * $array["FOO"]; //output : 200

#22_____________________

// switch (1) {
//     case 1:
//         print("BookDetails");
//     case 2:
//         print("BookAuthor");
//     default:
//         print("MissingBook");
// }

//output : BookDetailsBookAuthorMissingBook

#23________________________

// $s = 2;
// switch ($s) {
//     case 1:
//         print("Fred");
//         break;
//     case 2:
//         print("Fast");
//     case 3:
//         print("Tech");
//     default:
//         print("default");
// }

// output : FastTechdefault

#24___________________________

// $x = 0;
// $i;
// for ($i = 0; $i < 5; $i++) {
//     $x += $i;
// }
// print($x); //output : 10

#25____________________________

// $a = 20;
// $b = 4;
// $c = $a % $b;
// print($c); //output : 0


#27______________________

// $sentence = ['John', 'Doe', 'has', 'a', 'car'];

// for ($i = 0; $i < count($sentence); $i++) {
//     echo (function () use ($sentence) {
//         return $sentence;
//     })()[$i][0];
// }

// Output : JDhac

#32______________________

// function b($a = 4)
// {
//     $a = $a / 2;
//     return $a;
// }

// $a = 10;
// b($a);
// echo $a;

//output : 10


#37_____________________

// $a = 20;
// function myfunction($b)
// {
//     $a = 30;
//     global $a, $c;
//     return $c = ($b + $a);
// }
// print myfunction(40) + $c;

// output : 120

#40______________________

// echo date('l \t\h\e jS');

// output : Wednesday the 21st

#41_______________________

// $x = 123 == 0123;

// var_dump($x); // false

#56______________________

// $a = 20 % -8;
// echo $a;

// output : 4

#57_______________________

// echo (int)"1235Jason"; 

// output : 1235

// echo (int) "Jason1235";

// output : 0

#58______________________

// function odd()
// {
//     for ($i = 1; $i <= 50; $i = $i + 2) {
//         echo "$i";
//     }
// }
// echo "The last value of the variable\$i:$i";

// output : The last value of the variable$i:

#60_______________________

// $sale = 200;
// $sale = $sale - +1;
// echo $sale;

// output : 199

#67____________________

// $a = 6 - 10 % 4;
// echo $a;

// output : 4


#69___________________

// $a = [
//     '1' => "php",
//     "Hypertext",
//     "Preprocessor",
//     "widely used" => [
//         'general' => 'purpose',
//         'scripting' => 'language',
//         'that' => 'was',
//         'originally' => [
//             5 => 'designed',
//             9 => 'for',
//             'Web development',
//             4 => 'purpose'
//         ]
//     ]
// ];

// print_r($a['widely used']['originally']);

// Array
// (
//     [5] => designed
//     [9] => for
//     [10] => Web development
//     [4] => purpose
// )

// echo $a['widely used']['originally'][10];


#70________________________________________

// $array1 = array('a' => 20, 30, 35);
// $array2 = array('b' => 20, 35, 30);

// $array = array_intersect($array1, $array2);
// var_dump($array);

// array(3) {
//     ["a"]=>
//     int(20)
//     [0]=>
//     int(30)
//     [1]=>
//     int(35)
//   }

// $array = array_intersect_assoc($array1, $array2);
// var_dump($array);

// array(0) {
// }

#71_____________________________________

// $array1 = array("orange", "banana", "apple", "raspberry");
// $array2 = array(0 => "pineapple", 4 => "cherry");
// $array3 = array(0 => "grape");
// $array4 = array_replace($array1, $array2, $array3);
// print_r($array4);

// Array
// (
//     [0] => grape
//     [1] => banana
//     [2] => apple
//     [3] => raspberry
//     [4] => cherry
// )

#72____________________________________________

// $a = 1;
// $b = 2;
// $c = 0xAF;
// $d = $b + $c;
// $e = $d * $b;
// $f = ($d + $e) % $a;
// print($f + $e);

// output : 354

#74_________________________________

// $array = array("a1" => 'x', "a2" => 'e', "a3" => 'z');
// asort($array);
// foreach ($array as $keys => $values) {
//     print "$keys = $values ";
// }

// output : a2 = e a1 = x a3 = z 


#79_______________________________

// $name = array("d" => "Mark", "a" => "David", "b" => "Peter", "c" => "Martha");
// $nameArrayObject = new ArrayObject($name);
// $nameArrayObject->ksort();
// foreach ($nameArrayObject as $key => $val) {
//     echo "$key=$val \n";
// }

// a=David 
// b=Peter 
// c=Martha 
// d=Mark


#80______________________

// $array1 = array("a", "b", "c", "d", "e", "f");
// $array2 = array_slice($array1, -3);

// foreach ($array2 as $val) {
//     print "$val";
// }

// output : def

#81____________________________

// $array = array(1 => 'one', 3 => '10');
// echo $array;

// output : Array

#82______________________________

// $array = array(1.1 => '1', 1.2 => '2');

// print_r($array);

// Array
// (
//     [1] => 2
// )

#87________________________________

// $foo = function('$x', 'return $x*$x;');

// $foo = create_function("\$x", "return \$x*\$x;"); echo $foo(10);

// echo $foo(10);

#88_______________________________

// sscanf("2022-09-19", '%d-%d-%d', $year, $month, $day);

// echo $day . ' ' . $month . ' ' . $year;

// Output : 19 9 2022

#90____________________________

// $a=5;
// $b=10;
// functionMul() {
// // $GLOBALS['b']= $GLOBALS['a'] * $GLOBALS['b'];

// global $a, $b;

// $b = $a * $b;

// }
// Mul();
// print($b);

// output : 50


#94______________________________

// function a(&$a = 19)
// {
//     $a .= 1;
// }
// $b = 6;
// a($b);
// echo $b++;

//Output : 61

#95______________________________

// $input = [4, "4", "3", 4, 3, "3", 3, 3, 3, 3, 3, 5, 5, 5, 5, 7, 7, 7, 7];
// echo count(array_unique($input));

// output : 4


#96_________________________

// $array1 = array("a", "b", "c", "d", "e", "f");
// $array2 = array_slice($array1, 2, 2);
// foreach ($array2 as $val) {
//     print "$val";
// }

// output : cd

#98__________________________

// $a = 'somevalue';
// $array = ["a" => "One", "b" => "Two", "c" => "Three"];
// extract($array);
// echo "\$a=$a;\$b=$b;\$c=$c;";

// output : $a=One;$b=Two;$c=Three;

#99__________________________________

//array_unshift(array &$array, mixed ...$values): int

// $queue = array(1, 2);
// array_unshift($queue, 0, 4);
// print_r($queue);

// Array
// (
//     [0] => 0
//     [1] => 4
//     [2] => 1
//     [3] => 2
// )

#100___________________

// $a = array('a', 'b');
// array_push($a, array(1, 2));
// print_r($a);

// Array
// (
//     [0] => a
//     [1] => b
//     [2] => Array
//         (
//             [0] => 1
//             [1] => 2
//         )

// )
