<?php
$color = 'green';
$var_array = array("color" => "blue",101,102,
                   "size"  => "medium",
                   "shape" => "sphere");

/**
 * for numeric index, add prefix to the all variable
 */

// extract($var_array, EXTR_PREFIX_ALL, 'P');

// echo $P_0; //101




// extract($var_array);

// echo $color; //blue


/**
 * if variable already declared, then add prefix
 */

// extract($var_array, EXTR_PREFIX_SAME, 'x');

// echo $color; //green
// echo $x_color; //blue


/**
 * get all array value without using foreach
 */

 for($i=0; $i<count($var_array); $i++){
    echo current($var_array);
    echo "\n";
    next($var_array);
 }

// output : 
// blue
// 101
// 102
// medium
// sphere