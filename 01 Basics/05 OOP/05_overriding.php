<?php
class FirstClass
{

    public $name = "Parent Class";

    public function calc($a, $b)
    {
        return $a * $b;
    }
}

class DerivedClass extends FirstClass
{

    public $name = "Child Class";

    public function calc($a, $b)
    {
        return $a + $b;
    }
}

$test = new FirstClass;

echo $test->calc(5, 10);

$test = new DerivedClass;

echo $test->calc(5, 10);
