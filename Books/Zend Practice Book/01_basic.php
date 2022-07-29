<?php

# Q3

// define('myvalue', "10");
// $myarray[10] = "Dog";
// $myarray[] = "Human";
// $myarray['myvalue'] = "Cat";
// $myarray["Dog"] = "Cat";
// print "The value is: ";
// print $myarray[myvalue] . "\n";

// Output: The value is: Dog


#Q6

// $a = 10;
// $b = 20;
// $c = 4;
// $d = 8;
// $e = 1.0;
// $f = $c + $d * 2;
// $g = $f % 20;
// $h = $b - $a + $c + 2;
// $i = $h << $c;
// $j = $i * $e;
// print $j; //output : 256


#Q7

// $string = "Hello, World!";
// $a = false;
// $b = false;
// $c = true;
// if ($a) {
//     if ($b && !$c) {
//         echo "Goodbye Cruel World!";
//     } else if (!$b && !$c) {
//         echo "Nothing here";
//     }
// } else {
//     if (!$b) {
//         if (!$a && (!$b && $c)) {
//             echo "Hello, World!";
//         } else {
//             echo "Goodbye World!";
//         }
//     } else {
//         echo "Not quite.";
//     }
// }

// Output: Hello, World!;


#Q14

// function myfunction($a, $b = true)
// {
//     if ($a && !$b) {
//         echo "Hello, World!\n";
//     }
// }
// $s = array(
//     0 => "my",
//     1 => "call",
//     2 => '$function',
//     3 => ' ',
//     4 => "function",
//     5 => '$a',
//     6 => '$b',
//     7 => 'a',
//     8 => 'b',
//     9 => ''
// );
// $a = true;
// $b = false;
// /* Group A */
// $name = $s[0] . $s[4] . $s[9] . $s[9] . $s[9] . $s[9];
// /* Group B */
// $name(${$s[7]}, ${$s[8]});
