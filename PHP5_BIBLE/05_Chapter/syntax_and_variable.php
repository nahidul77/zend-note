<?php

/**
 * php is whitespace insensitive
 * 
 * all variables are case sensitive, function names arenot case sensitive
 * 
 * The smallest building blocks of PHP are the indivisible tokens, such as numbers (3.14159),strings (“two”), variables ($two), constants (TRUE), and the special words that make up the syntax of PHP itself (if,else, and so forth).
 * 
 */

// echo $how_much = 3.0 / 4.0 / 5.0;
//expression would evaluate to 0.15, because the left most of the two division operators wins he dispute over precedence.


//$ten = ($two = 2) + ($eight = 2 * (2 * 2));

//echo $ten . ' ' . $two . ' ' . $eight; //10 2 8

/**
 * Reasons for expressions and statements
 * two reasons to write an expression in PHP: for its value or for a side effect.
 */

//echo 'Hello';  // side effect is printing to screen
//2 * 3 + 4;  // useless - no side effect

/**
 * After the initial $, variable names must be composed of letters (uppercase or lowercase),digits (0–9), and underscore characters (_). Furthermore, the first character after the $ ma not be a number.
 * 
 * assign a variable near the top of a PHP file, the variable name has the same meaning for the rest of the file; and if it is not reassigned, it will have the same value as the rest of your code executes (except inside the body of functions).
 * 
 * Assignments of variables in one file do not affect variables of the same name in a different file or even in other requests for the same file.
 * 
 * you can pass information from page to page using GET and POST variables, store information persistently in a database, associate it with a user’s session using PHP’s session mechanism, or store it on a user’s hard disk via a cookie.
 */


/**
 * constant

  constants, which have a single value throughout their lifetime. Constants do not have a $ before their names, and by conven-tion the names of constants usually are in uppercase letters. 
  Constants can contain only scalar values (numbers and string). 
  Constants have global scope, so they are accessible everywhere in your scripts after they have been defined—even inside functions.
 */

// define('NAME', 'Nahidul Islam');

// function getName()
// {
//     echo NAME; //constant global scope
// }

// getName(); //output: Nahidul Islam
