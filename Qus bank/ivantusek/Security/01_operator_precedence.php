<?php

/**
 * BOD-MAS (Brackets, Order, Division, Multiplication, Addition, and Subtraction)
 * 
 * 
 “[ ]” Operator is given the 1st precedence,

Then ++, — , ~, (), @ got the 2nd operator precedence,

Then “instanceof” got the 3rd precedence,

4th one is “!”,

5th one is “ * ,  / ,  % ”,

6th precedence given to  +, – and . ,

>> and << got  7th precedence,

>, <, >=, <= got 8th precedence,

== , ===, !=, !==, <> got 9th precedence,

& got 10th,

^ got 11th,

| got 12th,

&&  got 13,

|| got 14,

?: got 15th ,

=, *=, /=, %=, +=, -=, =, &=, ^=, |=, <<=, >>=, => got 16th,

and got 17th ,

xor got 18th ,

or got 19th

and “,” got 20th operator precedence.

 */


// echo (((5 * 8) - 4) / 9); // 4

// echo (5 * 8 - 4 / 9); 

/**
 * 4/9 is calculated first which leaves the answer as “0.44444444444”. Then “5*8” will be calculated and then subtracted with this result to the 4/9 result and leaves “39.5555555556”.
 */


// $n11 = 10;
// $n12 = 5;
// $n13 = 2;
// $ans1 = $n11 + $n12 * $n13;
// echo "The result of ";
// echo "$n11 + $n12 * $n13 = $ans1" . PHP_EOL; //he result of 10 + 5 * 2 = 20
// $ans1 = ($n11 + $n12) * $n13;
// echo "The result of ";
// echo "($n11 + $n12) * $n13 = $ans1" . PHP_EOL; //he result of (10 + 5) * 2 = 30


// $x = 4;
// $y = 5;
// $a = 4;
// $b = 5;
// echo "First time x++ value :: ";
// echo $a++;
// echo "<br>";
// echo "Second time ++x value :: ";
// echo ++$a;
// echo "<br>";
// echo "First time - - y value :: ";
// echo --$b;
// echo "<br>";
// echo "Second time - - y value :: ";
// echo --$b;
// echo "<br>";
// $result = $x++ + ++$x / --$y * --$y; //4+6/4*3 
// echo "The result of (x++)+(++x)/(- - y)*(- - y) :: ";
// echo  "{$result} <br/>";
