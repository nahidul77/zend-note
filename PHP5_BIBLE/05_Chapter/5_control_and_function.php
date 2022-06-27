<?php

//________________________________For loop_______________

/**
 * It is also legal to include more than one of each kind of for clause, separated by commas.
The termination-check will be considered to be true if any of its subclauses are true; it is like
an ‘or’ test. For example, the following statement:
 */
// for (
//     $x = 1, $y = 1, $z = 1; //initial expressions
//     $y < 10, $z < 10; // termination checks
//     $x = $x + 1, $y = $y + 2, // loop-end expressions
//     $z = $z + 3
// )
// print("$x, $y, $z \n");

/**
 * The exit() construct takes either a string or a number as argument, prints out the argument,
and then terminates execution of the script. die() is a alias of exit()
 */


//_____________________include and require______________________

/**
 * parentheses are optional with both include() and require().
 * 
 * Both include and require have the effect of splicing in the contents of their file into the
PHP code at the point that they are called. The only difference between them is how they fail
if the file cannot be found. The include construct will cause a warning to be printed, but
processing of the script will continue; require, on the other hand, will cause a fatal error if
the file cannot be found


include_once and require_once, which act just like their counterparts
except that they will not include a file named by a given string if that file has already been
included. It’s usually better to use the _once version, in general, for including function and
class definition files.
 */



//_________________Recursive Function__________________________

// function countdown($num_arg)
// {
//     if ($num_arg > 0) {
//         print("Counting down from $num_arg \n");
//         countdown($num_arg - 1);
//     }
// }
// countdown(10);

/**
 * Output:
 * Counting down from 10 
Counting down from 9 
Counting down from 8 
Counting down from 7 
Counting down from 6 
Counting down from 5 
Counting down from 4 
Counting down from 3 
Counting down from 2 
Counting down from 1 
 */


function countdown_first($num_arg)
{
    if ($num_arg > 0) {
        print("Counting down (first) from $num_arg \n");
        countdown_second($num_arg - 1);
    }
}
function countdown_second($num_arg)
{
    if ($num_arg > 0) {
        print("Counting down (second) from $num_arg \n");
        countdown_first($num_arg - 1);
    }
}
countdown_first(5);


/**
 * Counting down (first) from 5 
Counting down (second) from 4 
Counting down (first) from 3 
Counting down (second) from 2 
Counting down (first) from 1 
 */
