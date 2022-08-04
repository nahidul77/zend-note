<?php

#1 

/**
 * BOD-MAS (Brackets, Order, Division, Multiplication, Addition, and Subtraction)
 * 
 */

// $a = 5;
// $b = 4;
// $c = ($a++ * ++$b); // 5 * 5
// echo $c;

// $a = 1;
// echo $a + ++$a; // $a = 2, so, 2 + 2 = 4

// $a = 1;
// echo $a + $a++; //  1 + 2 = 3

// $a = 1;
// echo $a + --$a; // $a = 0, so, 0 + 0 = 4

// $a = 1;
// echo $a + $a--; //  1 + 0 = 1



#7

/**
 * PHP directives are the configuration settings used to control various behaviours of PHP functions on your site. This can include for example; the memory limit assigned for PHP, the maximum amount of time before a PHP process will time out and the maximum file-size that could be uploaded via a PHP script.
 */

#9

/**
 * The only difference between these function is that htmlspecialchars() function convert the special characters to HTML entities whereas htmlentities() function convert all applicable characters to HTML entities.
 */

// $str = '<a href="https://www.geeksforgeeks.org">GeeksforGeeks</a>';

// echo htmlentities($str); //&lt;a href=&quot;https://www.geeksforgeeks.org&quot;&gt;GeeksforGeeks&lt;/a&gt;


// $str = '"geeksforgeeks.org" Go to GeeksforGeeks';

// echo htmlspecialchars($str, ENT_QUOTES);



#22

/**
 * The open_basedir configuration directive will limit the files that can be opened by PHP to the specified directory-tree. When a script tries to open a file with, for example, fopen() or gzopen(), the location of the file is checked. When the file is outside the specified directory-tree, PHP will refuse to open it. open_basedir is a good protection against remote file inclusion vulnerabilities. For a remote attacker it is not possible to break out of the open_basedir restrictions if he is only able to inject the name of a file to be included. Therefore the number of files he will be able to include with such a local file include vulnerability is limited.
 */
