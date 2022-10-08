<?php

#23_________________________

// Merge two arrays where one key ('one') is same

// $arr1 = array(
//     'zero' => 0,
//     'one' => 1,
//     'two' => 2, 10, 11, 12, 13
// );

// $arr2 = array(
//     'one' => 11,
//     'three' => 3,
//     'four' => 4, 12, 13, 14, 15
// );

// Merging both array using array_merge() function

// Here in $arr3 the value corresponding to
// the key 'one' will be from $arr2 and
// numeric keys will be renumbered

// $arr3 = array_merge($arr1, $arr2);

// echo "Result of array_merge() function\n";

// print_r($arr3);

// Array
// (
//     [zero] => 0
//     [one] => 11
//     [two] => 2
//     [0] => 10
//     [1] => 11
//     [2] => 12
//     [3] => 13
//     [three] => 3
//     [four] => 4
//     [4] => 12
//     [5] => 13
//     [6] => 14
//     [7] => 15
// )

// Merging both array using array union(+) operator
// Here in $arr4 the value corresponding to the key
// 'one' will be from $arr1 and numeric keys
// which are repeated in $arr2 will be ignored

// $arr4 = $arr1 + $arr2;

// echo "\nResult of array union(+) operator\n";

// print_r($arr4);

// (
//     [zero] => 0
//     [one] => 1
//     [two] => 2
//     [0] => 10
//     [1] => 11
//     [2] => 12
//     [3] => 13
//     [three] => 3
//     [four] => 4
// )
