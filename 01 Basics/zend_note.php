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
 */
