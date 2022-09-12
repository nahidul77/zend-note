<?php
//sort_______________________________

/**
 * Input : $array = [3, 4, 1, 2] 
Output : 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
)

Input : $array = ["geeks2", "raj1", "striver3", "coding4"]
Output :
Array
(
    [0] => coding4
    [1] => geeks2
    [2] => raj1
    [3] => striver3
)
 */


/**
 * Flags

  $toSort = array(2, 1, "img1", "img2", "img10", 1.5, "3.14", "2.72");
Note that 3.14 & 2.72 are strings.

Using SORT_REGULAR flag (compare items normally):

Array
(
    [0] => 2.72
    [1] => 3.14
    [2] => img1
    [3] => img10
    [4] => img2
    [5] => 1
    [6] => 1.5
    [7] => 2
)
Using SORT_NUMERIC flag (compare items numerically, so 3.14 is sorted as number not a string):

Array
(
    [0] => img10
    [1] => img1
    [2] => img2
    [3] => 1
    [4] => 1.5
    [5] => 2
    [6] => 2.72
    [7] => 3.14
)
Using SORT_STRING flag (SORT_LOCALE_STRING works similary, but depends on current locale, all values are treated as strings):

Array
(
    [0] => 1
    [1] => 1.5
    [2] => 2
    [3] => 2.72
    [4] => 3.14
    [5] => img1
    [6] => img10
    [7] => img2
)
Using SORT_NATURAL flag (note order of img* strings, it is natural):

Array
(
    [0] => 1
    [1] => 1.5
    [2] => 2
    [3] => 2.72
    [4] => 3.14
    [5] => img1
    [6] => img2
    [7] => img10
)
SORT_FLAG_CASE can be combined with SORT_STRING or SORT_NATURAL to do case-insensitive sort e.g.:

// works like SORT_NATURAL but is case-insensitive
sort($toSort, SORT_NATURAL | SORT_FLAG_CASE);
 */






// Shuffle__________________________________
// input array contain some elements which
// need to be shuffled.
$a = array(
    "a" => "Ram",
    "b" => "Shita",
    "c" => "Geeta",
    "d" => "geeksforgeeks"
);

shuffle($a);
// print_r($a);


// Array
// (
//     [0] => Geeta
//     [1] => Shita
//     [2] => Ram
//     [3] => geeksforgeeks
// )