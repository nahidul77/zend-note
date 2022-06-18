<?php
class person
{
    public $name;
    public $age;

    function __construct($name = "No Name", $age = 0)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function show()
    {
        echo $this->name . " - " . $this->age . "\n";
    }
}

$p1 = new person();
$p2 = new person("Ram Kumar", 15);
$p3 = new person("Salman Khan", 22);


$p1->show();
$p2->show();
