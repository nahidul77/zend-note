<?php

/**
 * Static Properties and Methods
 * 
 * Behaviors related to the class generally
 * Not tied to a particular instance
 * Often refer as class properties , class methods 
 * Accessible directly from the class, without any instance
 * Use keyword static
 * 
 * Student::$grades, Student::moto()
 * self::$grades, self::motto()
 * Static methods cannot use pseduo-variable $this
 * 
 * After instance created: 
 * Static properties are not accessible from an instance
 * Static methods are accessible from an instance 
 */

class Student
{

    public static $grades = ['Freshman', 'Sophomore', 'Junior', 'Senior'];
    private static $total_students = 0;

    public static function motto()
    {
        return "To learn PHP OOP!";
    }

    public static function count()
    {
        return self::$total_students;
    }

    public static function add_student()
    {
        self::$total_students++;
    }
}

echo Student::$grades[0] . PHP_EOL;
echo Student::motto() . PHP_EOL;

// echo Student::$total_students . PHP_EOL; // Error
echo Student::count() . PHP_EOL;
Student::add_student();
echo Student::count() . PHP_EOL;
