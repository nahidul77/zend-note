<?php

/**
 * __call() method called when we try to call a private or non existing method.
 * using __call() to avoid fatal error instead showing message or do somethings
 */

class student
{

    private $first_name;
    private $last_name;

    private function setName($fname, $lname)
    {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __call($method, $args)
    {
        if (method_exists($this, $method)) {
            call_user_func_array([$this, $method], $args); //call back function 
        } else {
            echo "Method does not exist : $method";
        }
    }
}

$test = new student();

$test->setName("Yahoo", "Baba");

echo "<pre>";
print_r($test);
echo "</pre>";
