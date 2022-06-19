<?php

/**
 *  __isset() method called when we try to check a private or non existing properties by isset().
 */

class student
{

    public $course;
    private $first_name;
    private $last_name;
    private $detail = ['name' => 'Test Name', 'age' => '20'];

    public function setName($fname, $lname)
    {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __isset($name)
    {
        echo isset($this->detail[$name]);
    }
}

$test = new student();
// $test->setName("Yahoo","Baba");

echo empty($test->city); // this also works with __isset()