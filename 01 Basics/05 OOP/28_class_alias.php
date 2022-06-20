<?php
class myClass{
	public $test;
}

class_alias("myClass","mc");

$a = new myClass();
$b = new mc();

$a->test = "Hello";
echo $a->test;

$b->test = "Hello";
echo $b->test;
