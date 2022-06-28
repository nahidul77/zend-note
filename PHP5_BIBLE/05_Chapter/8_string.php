<?php

/**
 * PHP has difficulty interpolating complex variable expressions, like multidimensional arrays and object variables, unless curly braces are used. The general rule is that if you have a { immediately followed by a $, PHP will evaluate the variable expression up until the closing } and will interpolate the resulting value into the string. (If you need a literal {$ to appear in your string, you can accomplish it by escaping either character with a backslash (\))
 */

// $my_string = "Doubled";
// for ($index = 0; $index < 7; $index++) {
//     $string_to_print = $my_string[$index];

//     print("$string_to_print$string_to_print");
// }


//_____________________Heredoc___________________

/**
 * This syntax turns out to be extremely useful for specifying large chunks of variable-interpolated text, because it spares you from the need to escape internal quotes. It is especially useful in creating pages that contain HTML forms. The operator in the heredoc syntax is <<<. What is expected immediately after this is a label (unquoted) that indicates the beginning of a multiline string. PHP will continue including subsequent lines into this string until it sees the same label again, beginning a line. The ending label may optionally be followed by a semicolon but by nothing else.
An example:

$my_string_var = <<<EOT
Everything in this rather unnecessarily wordy
ramble of prose will be incorporated into the
string that we are building up inevitably, inexorably,
character by character, line by line, until we reach that
blessed final line which is this one.
EOT;


Note that the preceding final EOT must not be indented at all — otherwise it will be taken to be just more text to be included. The label need not be literally EOT — it can be whatever you like within the normal rules for variable names in PHP.

Interpolation of variables happens exactly the same way as with double-quoted strings. The nice thing about heredoc, though, is that quote signs can be included without any escaping and without prematurely terminating the string. Another example:

echo <<<ENDOFFORM
<FORM METHOD=POST ACTION=”{$_ENV[‘PHP_SELF’]}”>
<INPUT TYPE=TEXT NAME=FIRSTNAME VALUE=$firstname>
<INPUT TYPE=SUBMIT NAME=SUBMIT VALUE=SUBMIT>
</FORM>
ENDOFFORM;

This has the effect of echoing a very simple form to the browser.
 */
