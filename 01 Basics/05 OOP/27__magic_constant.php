<?php

namespace MyNamespace;

/**
 * __LINE__ ,return the line number
 */

echo  "Line Number : " . __LINE__ . PHP_EOL;  // Line Number : 7


/**
 * __FILE__ ,return the absolute path of this file
 */

echo  "the full path of this file is : " . __FILE__ . PHP_EOL;


/**
 * __DIR__ ,return the directory path or folder path of this file
 */


echo "the full path of this directory is : " . __DIR__ . PHP_EOL;

/**
 * __FUNCTION__ ,return the function name
 */

function MyFunction()
{
    echo  "the function name is : " . __FUNCTION__ . PHP_EOL;
}

MyFunction();


/**
 * oop magic constant
 * __CLASS__ , return the class name.
 */


class MyClass
{
    public function getClassName()
    {
        return __CLASS__;
    }
}

$obj = new MyClass();
echo $obj->getClassName() . PHP_EOL;


/**
 * __METHOD__ , return the method name.
 */

class MyMethod
{
    public function getClassName()
    {
        return __METHOD__;
    }
}

$obj = new MyMethod();
echo $obj->getClassName() . PHP_EOL;

/**
 * __NAMESPACE__, return the namespace name
 */

namespace MyNamespace;

class MyTestClass
{
    public function getNamespace()
    {
        return __NAMESPACE__;
    }
}

$obj = new MyTestClass();
echo $obj->getNamespace() . PHP_EOL;

/**
 * __TRAIT__ , return the method name.
 */

trait MyTrait
{
    public function getTraitName()
    {
        return __TRAIT__;
    }
}

class MyTraitTest
{
    use MyTrait;
}

$obj = new MyTraitTest();
echo $obj->getTraitName();
