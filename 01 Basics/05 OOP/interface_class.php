<?php
# interface class start with interface keyword

# we cannot create any object of interface class

# It has no properties.

# all method are abstract method

# All method are public so dont need to use access modifiers

# object created by child class


interface parent1
{
    function calc($a, $b);
}

interface parent2
{
    function sub($c, $d);
}

class childClass implements parent1, parent2
{
    public function calc($a, $b)
    {
        echo $a + $b;
    }

    public function sub($c, $d)
    {
        echo $c - $d;
    }
}

$test = new childClass();

$test->calc(20, 35);

echo "<br>";

$test->sub(20, 10);



interface Animal
{
    public function makeSound();
}

// Class definitions
class Cat implements Animal
{
    public function makeSound()
    {
        echo " Meow ";
    }
}

class Dog implements Animal
{
    public function makeSound()
    {
        echo " Bark ";
    }
}

class Mouse implements Animal
{
    public function makeSound()
    {
        echo " Squeak ";
    }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach ($animals as $animal) {
    $animal->makeSound();
}
