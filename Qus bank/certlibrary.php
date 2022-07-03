<?php

# Q1
# echo '1' . (print '2') + 3; //214

//______________________________________________

# Q2

// $a = 3;
// switch ($a) {
//     case 1:
//         echo 'one';
//         break;
//     case 2:
//         echo 'two';
//         break;
//     default:
//         echo 'four';
//         break;
//     case 3:
//         echo 'three';
//         break;
// }

// output: three , so order doesn't matter.

//_____________________________________________

#Q3

# "instanceof" is an example of an operator.

// class MyClass
// {
// }
// class AnotherClass extends MyClass
// {
// }
// $obj = new AnotherClass();

// if ($obj instanceof AnotherClass) {
//     echo "The object is AnotherClass \n";
// }

// // The object is also an instance of the class it is derived from
// if ($obj instanceof MyClass) {
//     echo "The object is MyClass";
// }

//output: The object is AnotherClass  The object is MyClass

//______________________________________________________________

# Q4

// scalar, expression, boolean may be used in conjunction with CASE inside a SWITCH statement

// $x = 3;
// switch ($x) {

//     case ($x == 1):
//         echo 'Expression case executed';
//         break;
//     case '2':
//         echo 'scalar case executed';
//         break;
//     case true:
//         echo 'boolen case executed';
//         break;
//     default:
//         echo 'No case executed';
// }

//output: boolen case executed

//_______________________________________________________

# Q5

// $a = 'a';
// $b = 'b';
// echo isset($c) ? $a . $b . $c : ($c = 'c') . 'd'; //cd

//___________________________________________________________

# Q6

#  valid identifiers

// function object()
// {
//     echo 'object';
// }

// function _4You()
// {
//     $_1 = "Hello World";
//     echo '_4You' . ' ' . $_1;
// }

// object(); // object
// _4You(); // _4You Hello World

//___________________________________________

# Q7

# $_FILES super-global should be used to access information about uploaded files via a POST request.

//______________________________________________

# Q8

# Print has a return value, echo does not.

//_______________________________________________

# Q9

//echo "1" + 2 * "0x02"; // output: 5

//______________________________________________

# Q10

// echo "22" + "0.2", 23 . 1; // output: 22.2231

//_______________________________________________

# Q11

//Bitwise XOR takes two numbers as operands and does XOR on every bit of two numbers. The result of XOR is 1 if the two bits are different.

// echo 1 ^ 2; //output : 3

//________________________________________________

# Q12

// $first = "second";
// $second = "first";
// echo $ $$first; // output : second

//________________________________________________

# Q13

#Your supervisor wants you to disallow PHP scripts to open remote HTTP and FTP resources using PHP's file functions. Which php.ini setting should you change accordingly?

# allow_url_fopen=off 