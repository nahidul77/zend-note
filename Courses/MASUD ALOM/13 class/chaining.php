<?php

class Person
{
    private $name = "";

    private $age = "";

    public function setName($name = "")
    {
        $this->name = $name;
        return $this;
    }

    public function setAge($age = "20")
    {
        $this->age = $age;
        return $this;
    }

    public function getInfo()
    {
        return "Hello, My name is " . $this->name . " my age is " . $this->age;
    }
}

$obj1 = new Person();

echo $obj1->setName('Nahidul Islam')->setAge(28)->getInfo();
