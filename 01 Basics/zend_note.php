<?php

/**
 * 
 * PHP Tags
Standard Tags – best solution for portability and backwards compatibility, because they are guaranteed to be available and cannot be disabled by changing PHP’s configuration file.

<?php
... code
?>
However there can be only one open tag in the begining of the page <?php .
Short Tags – can be disabled (often for XML compliance) with short_open_tag directive in php.ini:

<?
... code
?>
This virant of short tag is identical to <? echo, enabled even if short_open_tag is disabled:

<?=$variable ?>
Script tags is also guaranted access, same as standart tags:

<script language="php">
... code
</script>
ASP Tags – must be enabled specifically in the php.ini file via the asp_tags directive:

<%
... code
%>
<%=$variable; %>
If a file is pure PHP code, it is preferable to omit the PHP closing tag at the end of the file. This prevents accidental whitespace or new lines being added after the PHP closing tag (e.g. header() needs to be at the very beginning of the output code).  The closing tag of a block of PHP code automatically implies a semicolon; you do not need to have a semicolon terminating the last line of a PHP block. The following is correct:

<?php
echo 'hello' // the ; is optional
?>
PHP files do not need the ‘executable’ privilege.

Comments
The “one-line” comment styles only comment to the end of the line or the current block of PHP code (or \r, \n, \r\n), whichever comes first. This means that HTML code after // … ?> or # … ?> WILL be printed: ?> breaks out of PHP mode and returns to HTML mode, and // or # cannot influence that. If the asp_tags configuration directive is enabled, it behaves the same with // %> and # %>. However, the </script> tag doesn’t break out of PHP mode in a one-line comment.

Expressions
In PHP, almost anything you write is an expression (i.e. value, functions, etc.). The simplest yet most accurate way to define an expression is “anything that has a value”.

A statement has the form of ‘expr ;‘ that is, an expression followed by a semicolon. In ‘$b = $a = 5;’, ‘$a = 5’ is a valid expression, but it’s not a statement by itself. ‘$b = $a = 5;’ however is a valid statement.

Note: since assignments are parsed in a right to left order, you can also write ‘$b = $a = 5’.


Operators
An operator is something that takes one or more values (or expressions) and yields another value (so that the construction itself becomes an expression).
Operators can be grouped according to the number of values they take. Unary operators take only one value, for example ! (the logical not operator) or ++ (the increment operator). Binary operators take two values, such as the familiar arithmetical operators + (plus) and – (minus), and the majority of PHP operators fall into this category. Finally, there is a single ternary operator, ? :, which takes three values; this is usually referred to simply as “the ternary operator” (although it could perhaps more properly be called the conditional operator).
Operator Precedence and Associativity 
The precedence of an operator specifies how “tightly” it binds two expressions together. For example, in the expression 1 + 5 * 3, the answer is 16 and not 18 because the multiplication * operator has a higher precedence than the addition + operator. Parentheses may be used to force precedence, if necessary. For instance: (1 + 5) * 3 evaluates to 18.

When operators have equal precedence, their associativity decides whether they are evaluated starting from the right, or starting from the left. Operation’s associativity can either be left (operations are performed left-to-right), right (operations are performed right-to-left) or none (for operations that cannot be associated).

mostly left or non-associative except ! ++ — ~ (int) (float) @ = += -= *= /= .= %= &= |= ˆ= <<= >>= which are right

The statement 1 < 2 > 1, is illegal in PHP (same associativity and precedence), whereas, the statement 1 <= 1 == 1 is legal.

$a = 3 * 3 % 5;   // (3 * 3) % 5 = 4
$a = true ? 0 : true ? 1 : 2;   // (true ? 0 : true) ? 1 : 2 = 2
Arithmetic Operators
Works same for the real world:

<?php

echo 2 + 2; // Addition. Will print 4
echo 3 - 2; // Subtraction. will print 1
echo 1 * 2; // Multiplication. Will print 2
echo 4 / 2; // Division . Will print 2
echo -2; // Negation. Will print -2
echo 3 % -2 // Modulus. Will print 1
echo -3 % 2 // Modulus. Will print -1
echo 0x8A + 3 // Will print 141 (0x8A = 8x16 + 10 = 138), note always returns the decimal values

?>
The division operator / returns a float value unless the two operands are integers (or strings that get converted to integers) and the numbers are evenly divisible, in which case an integer value will be returned. If try to division by zero then PHP Warning: Division by zero will be thrown.
Operands of modulus are converted to integers (by stripping the decimal part) before processing.
The result of the modulus operator % has the same sign as the dividend — that is, the result of $a % $b will have the same sign as $a. e.g. (5 % -3) = 2;  (-5 % 3) = -2

The dot operator:
$a = 1;
$a .= 2;
echo $a; // 12
Assignment Operators
The basic assignment operator is =. It means that the left operand gets set to the value of the expression on the right (that is, “gets set to”). The left side must be a variable.
The value of an assignment expression is the value assigned. That is, the value of $a in expression $a = 3 equal to 3. e.g. $a = ($b = 4) + 5; // value of $a is 9
For arrays, assigning a value to a named key is performed using the => operator. The precedence of this operator is the same as other assignment operators.
In addition to the basic assignment operator, there are “combined operators” for all of the binary arithmetic, array union and string operators that allow you to use a value in an expression and then set its value to the result of that expression. For example:

<?php
$a = 3;
$a += 5; // Equal 8
3 = $a; // output error
Note that the assignment copies the original variable to the new one (assignment by value), so changes to one will not affect the other.

Assignment by Reference
Assignment by reference is also supported, using the $var = &$othervar; syntax (ampersand & before variable). Assignment by reference means that both variables end up pointing at the same data, and nothing is copied anywhere. Once assigned, by reference will continue in effect until unset. By reference is slower in PHP.

<?php
$a = 3;
$b = &$a; // or a space in-between & $a // $b is a reference to $a
$b = 50;print "$a\n"; // prints 50
print "$b\n"; // prints 50
?>
As of PHP 5, the new operator (for objects) assigns by reference automatically, so assigning the result of new by reference (e.g. $a = &new C;) results in an E_DEPRECATED message in PHP 5.3 and later.

Bitwise Operators
Bitwise operators allow evaluation and manipulation of specific bits within an integer. Integral numbers are internally converted into bits: 5 -> 0101 = 0*8 + 1*4 + 0*2 + 1*1
Use parentheses to ensure the desired precedence. For example, $a & $b == true evaluates the equivalency then the bitwise and; while ($a & $b) == true evaluates the bitwise and then the equivalency.
Be aware of data type conversions. If both the left-hand and right-hand parameters are strings, the bitwise operator will operate on the characters’ ASCII values.

$a & $b (And) — Bits that are set in both $a and $b are set. Matching 1 in both (e.g. 4&1 // result 0).
$a | $b (Or (inclusive or)) — Bits that are set in either $a or $b are set. At least one 1 (e.g. 4|1 // result 5).
$a ^ $b (Xor (exclusive or)) — Bits that are set in $a or $b but not both are set. Only one 1 in both.
~ $a (Not) — Bits that are set in $a are not set, and vice versa. Convert 0 in to 1 and 1 in to 0
>> (Shift Right) – All of the bits in the binary number shift N places to the right in the number, the right most digit(s) falls out, and the resulting number is padded on the left with 0s. A right shift of one is equivalent to dividing a number by two, and tossing the remainder (e.g. 4>>1 // result 2).
<< (Shift Left) – All of the digits shift N places to the left, padding the right with 0s. A left shift of one is equivalent to multiplying a number by two  (e.g. 4<<1 // result 8).
Bit shifting in PHP is arithmetic. Bits shifted off either end are discarded. Left shifts have zeros shifted in on the right while the sign bit (the sign bit is the left most bit indicating where the signed integer is positive(0) or negative(1)) is shifted out on the left, meaning the sign of an operand is not preserved. Right shifts have copies of the sign bit shifted in on the left, meaning the sign of an operand is preserved.
An example of bitwise operation is the PHP error reporting feature. e.g. E_ALL & ~E_NOITCE (00000000000000000111011111111111 & 11111111111111111111111111110111 yields 00000000000000000111011111110111 the number of digits depends on the platform, the above is on a 32-bit platform)


Comparison Operators
Comparison operators, as their name implies, allow you to compare two values.

$a == $b (Equivalence) — TRUE if $a is equal to $b after type juggling.
$a === $b (Identity) — TRUE if $a is equal to $b, and they are of the same type.
$a != $b $a <> $b (Non-equivalent) — TRUE if $a is not equal to $b after type juggling.
$a !== $b (Non-identical) — TRUE if $a is not equal to $b, or they are not of the same type
$a < $b (Less than) — TRUE if $a is strictly less than $b.
$a > $b (Greater than) — TRUE if $a is strictly greater than $b.
$a <= $b (Less than or equal to) — TRUE if $a is less than or equal to $b.
$a >= $b (Greater than or equal to) — TRUE if $a is greater than or equal to $b.
If you compare a number with a string or the comparison involves numerical strings, then each string is converted to a number and the comparison performed numerically. The type conversion does not take place when the comparison is === or !== as this involves comparing the type as well as the value.
For various types, comparison is done according to the following:

null to string — Convert NULL to ””, or other words to empty string
bool or null to anything — Convert to bool
object to object — When using the comparison operator ==, object variables are compared in a simple manner, namely: Two object instances are equal if they have the same attributes and values, and are instances of the same class. On the other hand, when using the identity operator ===, object variables are identical if and only if they refer to the same instance of the same class
string, resource or number to string, resource or number — Translate strings and resources to numbers
array to array — Array with fewer members is smaller, if key from operand 1 is not found in operand 2 then arrays are uncomparable, otherwise – compare value by value
array to anything — array is always greater
object to anything — object is always greater.
NOTE: ( 0 == “a” ) is true, (“1” == “01”) is true


Ternary Operator
Another conditional operator is the ?: (or ternary) operator. The expression (expr1) ? (expr2) : (expr3) evaluates to expr2 if expr1 evaluates to TRUE, and expr3 if expr1 evaluates to FALSE. Since PHP 5.3, it is possible to leave out the middle part of the ternary operator. Expression expr1 ?: expr3 returns expr1 if expr1 evaluates to TRUE, and expr3 otherwise.
Please note that the ternary operator is a statement, and that it doesn’t evaluate to a variable, but to the result of a statement. This is important to know if you want to return a variable by reference. The statement return $var == 42 ? $a : $b; in a return-by-reference function will therefore not work and a warning is issued in later PHP versions.

It is recommended that you avoid “stacking” ternary expressions. PHP’s behaviour when using more than one ternary operator within a single statement is non-obvious.


print 0=='a1'? 'TRUE': 'FALSE'; or
0=='a1'? print 'TRUE': print 'FALSE';
but NOT 0=='a1'? echo 'TRUE': echo 'FALSE';
 */
