<?php

/**
 * Magic constant
 * 
 * aLL of these return a string and absolute path
 * __FILE__ , dirname(__FILE__)
 * __DIR__
 * 
 * Relative Path
 * 
 * . current directory
 * .. parent directory
 */


echo __FILE__ . PHP_EOL;
echo __DIR__ . PHP_EOL;

echo file_exists(__FILE__) ? 'exists' : 'none';
echo PHP_EOL;

$filepath = __DIR__ . '/file_basics.php';

echo file_exists($filepath) ? 'exists' : 'none';
echo PHP_EOL;
