<?php

#219_______________________

// $a = "hi,world";
// $b = array_map("strtoupper", explode(",", $a));
// foreach ($b as $value) {
//     print "$value";
// }

#output : HIWORLD

#220____________________

// $s = '13149';
// $s[$s[1]] = $s[1] + $s[3];
// print_r($s);

#output : 13179

#221______________________

// if (preg_match("/[^a-z589]+/", "AB asdfg589nmGH", $array)) {
//     print_r($array);
// }

// Array
// (
//     [0] => AB
// )

#223______________________

// echo substr("john@ucertify.com", strpos("john@ucertify.com", ".") + 1);

#output : com


#225________________________

// $string1 = "ZeNd php";
// $string1 = strtolower($string1);
// echo strrev($string1);

#output : php dnez

#227___________________________

// echo 'hello' . 1 + 2 . '34';

#output : hello334

#228______________________________

// $x = 'john';
// echo substr_replace($x, 'jenny', 0, 0);

#output : jennyjohn

#236________________________

// $some_string = "Student\tJohn\nMichel\tMaria";

// $token = strtok($some_string, ' ');

// while ($token !== false) {
//     echo "$token \n";
//     $token = strtok(" ");
// }

// Student	John
// Michel	Maria 

#239_______________________________

// $charlist = [
//     'a' => 'one',
//     'b' => 'two',
// ];

// echo strtr('acb', $charlist);

#output : onectwo

#270____________________________

// $x = new class extends \stdClass
// {
//     function getName()
//     {
//         return 'PHP';
//     }
// };
// echo $x->getName();

#Output : PHP

#282__________________________________

// $array = array_combine([1, 2, 3], [4, 5, 6]);

// print_r($array);

// Array
// (
//     [1] => 4
//     [2] => 5
//     [3] => 6
// )
