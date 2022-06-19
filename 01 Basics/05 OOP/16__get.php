<?php

/**
 * __get() method called when we try to access a private or non existing properties.
 * using __get() or __set() to avoid fatal error instead showing message or do somethings
 */

class abc
{
    private $data = ["name" => "Yahoo Baba", "course" => "PHP", "fee" => "2000"];

    public function __get($key)
    {
        if (array_key_exists($key, $this->data)) {
            return $this->data[$key];
        } else {
            return "This key($key) is not defined.";
        }
    }
}

$test = new abc();

echo $test->age;
