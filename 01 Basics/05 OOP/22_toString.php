<?php

/**
 * when we print a object as a string then __toString() method will be called
 * 
 * to avoid fatal error, we can show a message when trying to echo a object
 */
class abc
{

    public function __toString()
    {
        return "Can't print object as a string of class : " . get_class($this);
    }
}

$test = new abc();

echo $test;
