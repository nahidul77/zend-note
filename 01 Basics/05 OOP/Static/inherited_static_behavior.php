<?php

/**
 * Visibility modifiers function the same
 * Inherited static properties are shared variables (Changes to the parent value change subclass values and change to a subclass value change the parent value)
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


// Static properties and methods are inherited
class PartTimeStudent extends Student
{
}

echo PartTimeStudent::$grades[0] . PHP_EOL;
echo PartTimeStudent::motto() . PHP_EOL;

// Changes are shared too!
PartTimeStudent::$grades[] = 'Alumni';
echo implode(', ', Student::$grades) . PHP_EOL;

Student::add_student();
Student::add_student();
Student::add_student();
PartTimeStudent::add_student();

echo Student::count() . PHP_EOL;
echo PartTimeStudent::count() . PHP_EOL;
