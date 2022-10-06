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
 */
