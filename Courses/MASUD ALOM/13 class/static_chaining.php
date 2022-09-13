<?php

class Math
{
    public static $val;

    public static function init($var)
    {
        static::$val = $var;
        return new static;
    }

    public static function add($var)
    {
        static::$val += $var;
        return new static;
    }

    public static function sub($val)
    {
        static::$val -= $val;
        return new static;
    }

    public static function result()
    {
        return static::$val;
    }
}


echo Math::init(10)->add(20)->sub(10)->result(); //20

echo Math::sub(10)->result(); //10
