<?php

#___array_change_key_case

// $input_array = array("FirSt" => 1, "SecOnd" => 4);
// print_r(array_change_key_case($input_array, CASE_UPPER));

// Array
// (
//     [FIRST] => 1
//     [SECOND] => 4
// )


#__array_chunk

// $input_array = array('a', 'b', 'c', 'd', 'e');
// print_r(array_chunk($input_array, 2));

// Array
// (
//     [0] => Array
//         (
//             [0] => a
//             [1] => b
//         )

//     [1] => Array
//         (
//             [0] => c
//             [1] => d
//         )

//     [2] => Array
//         (
//             [0] => e
//         )

// )


// print_r(array_chunk($input_array, 2, true));

// Array
// (
//     [0] => Array
//         (
//             [0] => a
//             [1] => b
//         )

//     [1] => Array
//         (
//             [2] => c
//             [3] => d
//         )

//     [2] => Array
//         (
//             [4] => e
//         )

// )


#_________array_column

// $records = array(
//     array(
//         'id' => 2135,
//         'first_name' => 'John',
//         'last_name' => 'Doe',
//     ),
//     array(
//         'id' => 3245,
//         'first_name' => 'Sally',
//         'last_name' => 'Smith',
//     ),
//     array(
//         'id' => 5342,
//         'first_name' => 'Jane',
//         'last_name' => 'Jones',
//     ),
//     array(
//         'id' => 5623,
//         'first_name' => 'Peter',
//         'last_name' => 'Doe',
//     )
// );

// $first_names = array_column($records, 'first_name');
// print_r($first_names);

// Array
// (
//     [0] => John
//     [1] => Sally
//     [2] => Jane
//     [3] => Peter
// )

// $first_names = array_column($records, 'first_name', 'id');
// print_r($first_names);

// Array
// (
//     [2135] => John
//     [3245] => Sally
//     [5342] => Jane
//     [5623] => Peter
// )


#__array_search

// $array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

// $key = array_search('green', $array); // $key = 2;
// $key = array_search('red', $array);   // $key = 1;


#__array_splice

// $input = array("red", "green", "blue", "yellow");
// array_splice($input, 2);
// var_dump($input);

// $input = array("red", "green", "blue", "yellow");
// array_splice($input, 1, -1);
// var_dump($input);

// $input = array("red", "green", "blue", "yellow");
// array_splice($input, 1, count($input), "orange");
// var_dump($input);

// $input = array("red", "green", "blue", "yellow");
// array_splice($input, -1, 1, array("black", "maroon"));
// var_dump($input);


// array(2) {
//     [0]=>
//     string(3) "red"
//     [1]=>
//     string(5) "green"
//   }
//   array(2) {
//     [0]=>
//     string(3) "red"
//     [1]=>
//     string(6) "yellow"
//   }
//   array(2) {
//     [0]=>
//     string(3) "red"
//     [1]=>
//     string(6) "orange"
//   }
//   array(5) {
//     [0]=>
//     string(3) "red"
//     [1]=>
//     string(5) "green"
//     [2]=>
//     string(4) "blue"
//     [3]=>
//     string(5) "black"
//     [4]=>
//     string(6) "maroon"
//   }
