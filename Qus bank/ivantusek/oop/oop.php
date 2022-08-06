<?php
#1


// $x = array(10, 2, 4);
// $y = array(1 => 2, 0 => 10, 2 => 4);

// var_dump($x == $y); //bool(true)


#10

//objects are passed by references by default

// class test1
// {
//     public $name;
// }
// $obj1 = new test1();
// echo "ID of obj1: " . spl_object_hash($obj1) . "\n"; //0000000032f49af8000000006f7614d2
// $obj2 = $obj1;
// echo "ID of obj2: " . spl_object_hash($obj2); //0000000032f49af8000000006f7614d2
// $obj1->name = "Amar";
// echo "name: " . $obj2->name; //name: Amar


#18

// class A
// {
// };
// class B1 extends A
// {
// };

// class_alias('A', 'B2');

// $b1 = new B1;
// echo get_class($b1); // B1
// $b2 = new B2;
// echo get_class($b2); // A
