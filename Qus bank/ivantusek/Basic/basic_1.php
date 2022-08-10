<?php
#1

// $a = 0;

// if ($a = 10) {
//     echo "first";
// }

// if ($a == 0) {
//     echo "Second";
// }

// if ($a == "0") {
//     echo "Third";
// }

// first

#08 

// $i = 100;
// $j = $i++ - 10;
// echo $i . '-' . $j; // 101-90

#10

// echo 8 / 4 * 4; // left to right -- 8

// echo 4 * 4 / 8; // 2

#13

// $a = ($b = 13) - 5;
// echo $a . '-' . $b; // 8 - 13


#13 

// $a = '1';
// $b = '01';

// if ($a == $b) {
//     echo '1 and 01 is equal';
// }


#14

/**
 * The + operator returns the right-hand array appended to the left-hand array; for keys that exist in both arrays, the elements from the left-hand array will be used, and the matching elements from the right-hand array will be ignored.
 */

// $a = array('z', 'x');
// $b = array('y', 'w');

// $e = $a + $b;

// $c = array('a' => 1, 'b' => 2);
// $d = array('c' => 3, 'd' => 4);

// $f = $c + $d;

// foreach ($e as $value) {
//     echo $value;
// }

// foreach ($f as $value) {
//     echo $value;
// }

//zx1234


#24 

/* Note the use of quotes, this is important.  This example is checking
 * if the string 'TEST' is the name of a constant named TEST */

// if (defined('TEST')) {
//     echo TEST;
// } else {
//     echo 'constant not defined';
// }


#25 

// define('SOMEVAL', 0);

// echo constant('SOMEVAL');
// // echo strlen(123MSG);

// if (strlen(SOMEVAL) > 0) {
//     echo 'Hello';
// }

// Hello

#27

// define('MYCONSTANT', 0);

// if (empty(MYCONSTANT)) {
//     echo 'hello';
// } else {
//     echo 'Bye';
// };

// hello


#31

// $colors = array(
//     'r' => 'f00',
//     'g' => '0f0',
//     'b' => '00f'
// );

// echo next($colors); // 0f0

// foreach ($colors as $k => $v) {
//     echo $k; //rgb
// }

// echo next($colors); // 00f

// while (list($k, $v) = each($colors)) {
//     echo $k; // b
// }

// echo reset($colors); // f00

// while (list($k, $v) = each($colors)) {
//     echo $k; // rgb
// }



#32_________________________

// for ($i = ord('a'); $i < ord('e'); $i++) {
//     echo $i . ' - ' . chr($i) .  PHP_EOL;
// }

// 97 - a
// 98 - b
// 99 - c
// 100 - d


#34___________________________

// for ($i = 5;; $i++) {
//     if ($i < 10) {
//         break;
//     }
// }

// echo $i; //5

#35___________________

// $x = 5;

// switch ($x) {
//     case 5:
//         echo 'a';
//         break;
//     default:
//         echo 'e';
// } //a



#36______________________________

// $myArray = array('a', 'b', 'c');

// foreach ($myArray as $k => $v) {
//     echo $v;

//     for ($i = 1; $i < 5; $i++) {
//         if ($i == $k) {
//             break (2);
//         }

//         echo $i;
//     }
// }

//a1234b


#37__________________________

// $number = 15;

// if ($number > 15);
// for ($i = 1; $i < 5; $i++)
//     echo $i; // 1234
// echo $number; //15


#53____________________________

// $int1 = 25;
// $int2 = 10;

// echo $int1 / $int2; // 2.5
// echo ceil($int1 / $int2); // 3
// echo (int) ($int1 / $int2); // 2


// echo 010;
