<?php

/**
 * 
 * File pointer
 * 
 * Similar to the cursor in a word processing application
 * Move pointer forward and backward
 * Choose a position to start reading or writing
 * important difference: pointer overwrites text
 * 
 * ftell (return the current position of the file pointer)
 * fseek (it moves the file pointer to offset)
 * 
 * 
 */

$filepath = __DIR__ . '/sonnet.txt';

$handle = fopen($filepath, 'r+'); // read and write
if ($handle) {

    echo ftell($handle) . PHP_EOL;

    fread($handle, 26);

    echo ftell($handle) . PHP_EOL;

    fwrite($handle, 'winter');

    echo ftell($handle) . PHP_EOL;

    fseek($handle, 35);

    echo ftell($handle) . PHP_EOL;

    fwrite($handle, 'eve');

    echo ftell($handle) . PHP_EOL;


    fclose($handle);
}
