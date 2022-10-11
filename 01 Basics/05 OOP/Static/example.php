<?php

class A
{
    public static function foo()
    {
        echo static::who();
    }

    public static function who()
    {
        echo 'A';
    }
}

class B extends A
{
    public static function test()
    {
        A::foo();
        static::foo();
        self::foo();
    }

    public static function who()
    {
        echo 'B';
    }
}

class C extends B
{
    public static function who()
    {
        echo 'C';
    }
}

C::test();
