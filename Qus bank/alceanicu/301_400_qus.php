<?php

#308______________________________

// $a = 10;
// $b = 20;
// $c = 30;
// echo ($a < 50 && $b > 100 || $c == 30) ? "a" : "b";
// echo ($b < 50 xor $c == 30) ? "c" : "d";

# output : ad

#309___________________________

// $a = 0;

// if ($a = 10) {
//     echo "a";
// }
// if ($a == 0) {
//     echo "b";
// }
// if ($a == "0") {
//     echo "c";
// }

#output : a

#312________________________

// $a = 15;
// $b = $a;
// $b = 25;
// $c = 50;
// $d = &$c;
// $d = 25;
// echo $a . '-' . $c;

#output : 15-25

#313_______________________

// $str = 'foo';
// $str .= 'bar';
// $num = 0;
// $num += 25;
// $num -= 15;
// echo $str . '-' . $num;

#output : foobar-10

#314________________________

// $a = ($b = 13) - 5;
// echo $a . '-' . $b;

#output : 8-13

#315________________________

// $i = 100;
// $j = $i++ - 10;
// echo $i . '-' . $j;

#output : 101-90

#316______________________________

// $a = 0xF0;
// $b = 0x0F;

// $val1 = $a & $b; //bitwiseAND
// $val2 = $a | $b; //bitwiseOR
// $val3 = $a ^ ($b | $a); //bitwiseXOR

// echo sprintf('0x%02X-0x%02X-0x%02X', $val1, $val2, $val3);

#output : 0x00-0xFF-0x0F

#317________________________

// $a = 10 * 5 + 8;
// $b = 4 * 6 - 10 / 2;
// $c = 8 / (12 - 8) * 4;
// echo $a . '-' . $b . '-' . $c;

#Output : 58-19-8

#319__________________________

// $a = 15 << 2;
// $b = 10 >> 1;
// $c = 0xF0 >> 4;

// echo sprintf('%d-%d-0x%X', $a, $b, $c);

#output : 60-5-0xF

#320____________________________

// $a = "1";
// $b = "01";

// echo ($a == $b) ? "a" : "b";
// echo ($a === $b) ? "c" : "d";
// echo ($a < $b) ? "e" : "f";

#output : adf

#321____________________

// $a = array('z', 'x');
// $b = array('y', 'w');

// $c = array('a' => 1, 'b' => 2);
// $d = array('c' => 3, 'd' => 4);

// $e = $a + $b;
// $f = $c + $d;

// foreach ($e as $value) {
//     echo $value;
// }
// foreach ($f as $value) {
//     echo $value;
// }

# Output : zx1234


#322_______________________

// $a = 10;
// $b = "10";

// if ($a == $b) {
//     echo "a";
// } else {
//     echo "b";
// }
// if ($a === $b) {
//     echo "c";
// } else {
//     echo "d";
// }

#output : ad

#324_________________________

// $myVar='foo';
// $$myVar='bar';
// echo$'myVar';  //syntax error

#325___________________________

// $varName = 'abc';
// $$varName = '123';
// echo $abc;

#output : 123

#326_________________________

// function getName($lastName)
// {
//     if ($lastName) {
//         return 'Bloggs';
//     } else {
//         return 'Jeremiah';
//     }
// }

// $func = 'getName';
// echo $func(true);

#output : Bloggs

#327____________________________

// $myVar = 'foo';
// $$myVar = 'bar';
// echo ${'myVar'} . $foo;

#output : foobar

#329____________________

// $name = 'Joe';
// $$name = 'Bloggs';
// echo ${$name};

#output : Bloggs

#333______________________

// define('SOMEVAL', 0);

// if (strlen(SOMEVAL) > 0) {
//     echo "Hello";
// } else {
//     echo "Goodbye";
// }

# Output : Hello


#334__________________

// define('MYCONSTANT', 0);
// if (empty(MYCONSTANT)) {
//     echo "Hello";
// } else {
//     echo "Goodbye";
// }

# Output : Hello

#335______________________

// $number = 100;
// echo $number < 10 ? "a" : ($number > 100 ? "b" : "c");

# output : c

#336______________________

// $arr = array(1, 2, 3, 4);
// foreach ($arr as $value) {
//     $value -= 1;
// }

// foreach ($arr as &$value) {
//     $value *= 2;
// }

// foreach ($arr as $v) {
//     if ($v <= 8) {
//         echo $v;
//     }
// }

# Output : 2468

#337_______________________

// $x = 5;
// $y = $x << 1;
// switch ($x + $y) {
//     case 5:
//         echo "a";
//         break;
//     case 10:
//         echo "b";
//         break;
//     case 15:
//         echo "c";
//     case 20:
//         echo "d";
//         break;
//     default:
//         echo "e";
// }

# output : cd

#338____________________

// $colors = ['r' => 'f00', 'g' => '0f0', 'b' => '00f'];
// next($colors);
// foreach ($colors as $k => $v) {
//     echo $k;
// }
// reset($colors);
// while (list($v, $k) = each($colors)) {
//     echo $v;
// }

# Output : rgbrgb

#339_____________________

// for ($i = ord('a'); $i < ord('e'); $i++);
// echo chr($i);

#output : e

#343_________________________

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

# Output : a1234b

#344_______________________

// $number = 15;
// if ($number > 15);
// for ($i = 1; $i < 5; $i++)
//     echo $i;

// echo $number;

# Output : 123415

#346________________________

// $myArray = array(1, 2, 3);
// for ($i = 0, $length = count($myArray); $i < $length; $i++) {
//     echo $myArray[$i];
// }

#output 123

#347_______________________

// $i = 5;
// while (--$i > 0) {
//     echo $i + 1;
// }

#output 5432

#349________________________

// for ($i = 0; $i < 3; $i++) {
//     for ($j = 3; $j > 0; $j--) {
//         if ($i == $j) {
//             break;
//         }
//         echo $j;
//     }
// }

# Output : 321323

#350_______________________

// $ages = array(16, 10, 46, 25, 41);
// $largest = -1;
// foreach ($ages as $age) {
//     if ($largest < 0) {
//         $largest = $age;
//         continue;
//     }

//     if ($age > $largest) {
//         $largest = $age;
//     }
// }

// echo sprintf('The largest age is %d', $largest);

#output : The largest age is 46


#351________________

// $i = ord('a');
// do {
//     echo chr($i);
// } while ($i++ < ord('f') + 1);

# output : abcdefg


#359___________________________________

// $myInt = -1;
// $myBool = (bool)$myInt;
// if ($myBool > 0) {
//     echo "5";
// } elseif ($myBool == true) {
//     echo "6";
// } elseif (!$myBool) {
//     echo "7";
// } else {
//     echo sprintf("%d", $myBool);
// }

#output : 5

#360_________________________________

// $int1 = 25;
// $int2 = 10;

// $int3 = ceil($int1 / $int2);
// $int4 = ceil((int)($int1 / $int2));

// echo $int3 . '-' . $int4;

#output : 3-2


#366__________________________

// $values = [15, 12, "15", 34, 15 => 25];
// $key = array_search("15", $values);

// if (!$key) {
//     echo "Not found";
// } else {
//     //gettype()willreturneither'string'or'integer'
//     echo $key . '-' . strtolower(gettype($values[$key]));
// }

#output : Not found


#367____________________________

// $arr1 = ['a' => 'Apple', 'b' => 'Banana'];
// $arr2 = ['b' => 'Banana', 'a' => 'Australia',  'Apple'];
// $arr3 = array_diff($arr1, $arr2);
// $arr4 = array_diff($arr2, $arr1);
// $keys = array_keys($arr4);

// echo count($arr3) . '-' . $keys[0];

#output : 0-a

#369____________________________

// $myArray = array();
// array_unshift($myArray, 10, 20);
// echo $myArray[0];

#output : 10

#370_______________________

// function cleanArray($arr)
// {
//     $funcs = array();
//     array_push($funcs, 'array_filter', 'array_unique');
//     $ret = $arr;
//     foreach ($funcs as $func) {
//         $ret = $func($ret);
//     }
//     return $ret;
// }

// $values = [15, '', 0, 25, 'hello', 15];
// foreach (cleanArray($values) as $v) {
//     echo $v;
// }

#output : 1525hello


#374__________________________

// $myArray = [0, NULL, '', '0', -1];

// print_r(array_filter($myArray));

// Array
// (
//     [4] => -1
// )


#379________________________________

// $values = array(
//     array(
//         1 => 10,
//         20,
//         array(30, array(40))
//     ),
//     array(
//         2 => 50,
//         array(
//             array(1 => 60, 0 => 70)
//         )
//     )
// );

// echo $values[0][3][1][0];  //40

#384_____________________________

// $newArray[E_STRICT] = 'foo'; // VALID

#386______________________

// $arr = array_flip(['a' => 1, 'b' => 2, 'c' => 3]);

// foreach (array_values($arr) as $k => $v) {
//     echo $k;
// }

#Output : 012


#387________________________

// $cars = ['year' => 2010, 'make' => 'Porsche', 'model' => 911];
// while ($value = next($cars)) {
//     echo $value;
// }

#output : Porsche911

#389_______________________

// $numbers = array(5, 6, 7, 8);
// end($numbers);
// while (key($numbers)) {
//     echo current($numbers);
//     prev($numbers);
// }

#output : 876

#391___________________________

// function reducer($total, $elt)
// {
//     return $elt + $total;
// }
// $arr = [1, 2, 3, 4, 5];
// echo array_reduce($arr, 'reducer', 1);  // 16

#393____________________________

// function sortByLength($a, $b)
// {
//     $lenA = strlen($a);
//     $lenB = strlen($b);
//     if ($lenA == $lenB) {
//         return 0;
//     }
//     /**line**/
//     return $lenA < $lenB ? -1 : 1;
// }

// $values = ['ccc', 'a', 'eeeeee', 'dddd', 'bb', 'fffff'];
// usort($values, 'sortByLength');
// echo $values[5]; //eeeeee


#394_______________________________

// $filenames = array(
//     'img12.png',
//     'img7.png',
//     'img21.png',
//     'img1.png'
// );

// natsort($filenames);
// print_r($filenames);
// $values = array_values($filenames);
// print_r($values);
// echo $values[1];

// Array
// (
//     [3] => img1.png
//     [1] => img7.png
//     [0] => img12.png
//     [2] => img21.png
// )

// Array
// (
//     [0] => img1.png
//     [1] => img7.png
//     [2] => img12.png
//     [3] => img21.png
// )
// img7.png

#397_______________________

// $fruitAndVeg = array(
//     'c' => 'Carrot',
//     'p' => 'Tomato',
//     'b' => 'Banana',
//     't' => 'Potato',
//     'a' => 'Apple'
// );

// /**line**/
// ksort($fruitAndVeg);
// $keys = array_keys($fruitAndVeg);
// echo $keys[0]; //a 


#398_______________________

// $values = array(37, 5, "09");
// sort($values, SORT_STRING);
// foreach ($values as $v) {
//     echo $v;
// }

#output : 09375

#399________________________

// $subs = ['@'  => '<at>',  'com' => 'net'];
// $email = "your_name@mail.com";
// echo strtr($email, $subs);

#output : your_name<at>mail.net

#400___________________________

// function buildUrl($domain, $path)
// {
//     //insertlineofcodehere
//     $ret = rtrim($domain, '/') . '/' . ltrim($path, '/');
//     return $ret;
// }

// $domain1 = 'http://phpriot.com/';
// $domain2 = 'http://phpriot.com';
// $path = '/quiz/';

// echo $url1 = buildUrl($domain1, $path) . PHP_EOL;
// echo $url2 = buildUrl($domain2, $path);

// http://phpriot.com/quiz/
// http://phpriot.com/quiz/
