<?php

$name = "nahidul Islam";

/**
 * Heredoc equavalent to " "
 */
$result = <<<DOC
My Name is 
$name
DOC;

echo $result; //heredoc result

// My Name is 
// nahidul Islam

/**
 * Here doc equavalent to ''
 */

$result = <<<'DOC'
My Name is 
$name
DOC;

echo $result; // nowdoc result

// My Name is 
// $islam


/**
 * before 7.3 closing idetifier must be start without whitespace
 * same amount of whitespace would be remove from every line as many as whitespace has before closing identifier.
 * the closing identifier can be followed by other code on the same line.
 */

// Valid from PHP 7.3
echo <<<EOT
    SELECT * FROM `contacts`
        WHERE `telephone` IS NOT NULL;
    EOT;
// Output:-
// SELECT * FROM `contacts`
//     WHERE `telephone` IS NOT NULL;



// This is invalid code
echo <<<EOT
SELECT * FROM `contacts`
        WHERE `telephone` IS NOT NULL;
    EOT;


 // Valid as of PHP 7.3
$strings = [
    'Looney Toons', <<<EOT
    Steven Spielberg Presents Tiny Toon Adventures
    EOT, 'Animaniacs',
];