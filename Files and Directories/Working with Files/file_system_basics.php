<?php

/**
 * Filesystem Basics
 * 
 * these three functions return true or false
 * 
 * file_exists
 * is_file
 * is_dir
 * 
 * 
 */


$filepath = '\Xampp\htdocs\PHP\ZEND\Files and Directories\Working with Files\file_system_basics.php';
$dirpath = '\Xampp\htdocs\PHP\ZEND\Files and Directories\Working with Files';

echo file_exists($filepath) ? 'exists' : 'none';
echo PHP_EOL;

echo file_exists($dirpath) ? 'exists' : 'none';
echo PHP_EOL;

echo is_file($filepath) ? 'file' : 'not file';
echo PHP_EOL;

echo is_file($dirpath) ? 'file' : 'not file';
echo PHP_EOL;

echo is_dir($filepath) ? 'dir' : 'not dir';
echo PHP_EOL;

echo is_dir($dirpath) ? 'dir' : 'not dir';
echo PHP_EOL;
