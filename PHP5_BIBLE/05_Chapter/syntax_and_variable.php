<?php

/**
 * php is whitespace insensitive
 * 
 * all variables are case sensitive, function names arenot case sensitive
 * 
 * The smallest building blocks of PHP are the indivisible tokens, such as numbers (3.14159),strings ("two"), variables ($two), constants (TRUE), and the special words that make up the syntax of PHP itself (if,else, and so forth).
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

//_______________________________________________________________

/**
 * constant

  constants, which have a single value throughout their lifetime. Constants do not have a $ before their names, and by conven-tion the names of constants usually are in uppercase letters. 
  Constants can contain only scalar values (numbers and string). 
  Constants have global scope, so they are accessible everywhere in your scripts after they have been defined—even inside functions.
 */

define('NAME', 'Nahidul Islam');

function getName()
{
    echo NAME; //constant global scope
}

// getName(); //output: Nahidul Islam


//______________________Data Types____________________________________

/**
 * integer
 * Integers can actually be read in three formats, which correspond to bases:decimal(base 10),octal(base 8), and hexadecimal(base 16). 
 * Decimal format is the default, octal integers are
specified with a leading 0, and hexadecimals have a leading 0x. Any of the formats can be preceded by a - sign to make the integer negative. For example:
 */

$integer_10 = 1000;
$integer_8 = -01000;
$integer_16 = 0x1000;
// print("integer_10: $integer_10 \n");
// print("integer_8: $integer_8 \n");
// print("integer_16: $integer_16 \n");

/**
 * Note that the read format affects only how the integer is converted as it is read—the value stored in $integer_8 does not remember that it was originally written in base 8. Internally, of course, these numbers are represented in binary format; we see them in their base 10 conver-sion in the preceding output because that is the default for printing and incorporating int variables into strings.
 * 
 * Doubles
 */

$first_double = 123.456;
$second_double = 0.456;
$even_double = 2.0;

$five = $even_double + 3;

// echo $five; //

// it is dangerous to use floating-point expressions as Boolean expressions, due to possible rounding errors.

// $floatbool = sqrt(2.0) * sqrt(2.0) - 2.0; //2 - 2.0
// if ($floatbool)
//     print("Floating-point Booleans are dangerous! \n");
// else
//     print("It worked ... this time. \n");

// print("The actual value is $floatbool \n");

//______________NULL____________

/**
 * $my_var = NULL;
The special constant NULL is capitalized by convention, but actually it is case insensitive; 
you could just as well have typed: $my_var = null;


✦It evaluates toFALSEin a Boolean context.
✦It returnsFALSEwhen tested withIsSet(). (No other type has this property.)
✦PHP will not print warnings if you pass the variable to functions and back again,whereas passing a variable that has never been set will sometimes produce warnings.



$authorization = NULL;

// code that might or might not set $authorization

if (test_authorization($authorization)) {
// code that grants a privilege of some sort
}


does not cause an unbound-variable warning, assuming that you have writtentest_authorization()to handle arguments that might be NULL. It also makes clear to a reader
of the code that you intend for the variable to lack a value unless there’s a case where it is
assigned.

 */


//_____________________String_______________________

/**
 * $win_path = ‘C:\\InetPub\\PHP\\’;

  We could have used single backslashes to produce the first two backslashes in the output, but the escaping is necessary at the end of the string so that the closing quote will not be escaped.


  These two escape sequences (\\and\’) are theonlyexceptions to the literal-mindedness of singly quoted strings.

 * Strings that are delimited by double quotes (as in"this") are preprocessed in both the following two ways by PHP:

✦ Certain character sequences beginning with backslash (\) are replaced with specialcharacters.
✦ Variable names (starting with$) are replaced with string representations of their values.The escape-sequence 

replacements are:
✦ \n is replaced by the newline character
✦ \r is replaced by the carriage-return character
✦ \t is replaced by the tab character
✦ \$ is replaced by the dollar sign itself ($)
✦ \" is replaced by a single double-quote (")
✦ \\ is replaced by a single backslash (\)

Variable Interpolation

✦ If the variable is currently set to a string value, that string is interpolated (or spliced) into the doubly quoted string.
✦ If the variable is currently set to a nonstring value, the value is converted to a string,and then that string value is interpolated.
✦ If the variable is not currently set, PHP interpolates nothing (or, equivalently, PHP splices in the empty string).

 */

// $thi = "this";
// $that = "that";
// $the_other = 2.2000000000;
// print("$thi, $not_set, $that+$the_other \n");  // undefined variable $not_set
