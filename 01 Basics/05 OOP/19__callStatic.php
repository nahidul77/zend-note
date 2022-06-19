<?php

/**
 * __callStatic() method called when we try to call a private or non existing Static method.
 * using __callStatic() to avoid fatal error instead showing message or do somethings
 */

class student
{

    private static function hello($name)
    {
        echo "Hello $name";
    }

    public static function __callStatic($method, $args)
    {
        if (method_exists(__class__, $method)) {
            call_user_func_array([__class__, $method], $args);
        } else {
            echo "Method does not exist : $method";
        }
    }
}

student::hello("Yahoo baba");
