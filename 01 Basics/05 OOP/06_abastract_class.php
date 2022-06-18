<?php

# abstract class start with abstract keyword

# we cannot create any object of abstract class

# it has a abstract method

# object created by child class

/**
 * Abstract class comes under partial abstraction.
 * Abstract classes can maintain abstract methods and non abstract methods.
 * In abstract classes, we can create the variables.
 * In abstract classes, we can use any access specifier.
 * By using 'extends' keyword we can access the abstract class features from derived class.
 * Multiple inheritance is not possible.
 */

// Parent class
abstract class Car
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro(): string;
}

// Child classes
class Audi extends Car
{
    public function intro(): string
    {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends Car
{
    public function intro(): string
    {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

class Citroen extends Car
{
    public function intro(): string
    {
        return "French extravagance! I'm a $this->name!";
    }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
