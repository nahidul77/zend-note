<?php

#103_____________________

// function foo()
// {
//     return array_sum(func_get_args());
// }
// $x = foo(1, 2, 3);
// echo ($x ?? 'x');

//output : 6


#104______________________

// $array = [
//     'a' => 'One',
//     'b' => 'Two',
//     'c' => [
//         'd' => 'Three',
//         'e' => 'Four'
//     ]
// ];
// function print_element($array)
// {
//     extract($array);
//     return $c['e'];
// }
// print print_element($array);

#output : 4

#105_______________________

// $keys = array('foo', 5, 10, 'bar');
// $a = array_fill_keys($keys, 'banana');
// print_r($a);

// Array
// (
//     [foo] => banana
//     [5] => banana
//     [10] => banana
//     [bar] => banana
// )

#107_________________________

// $array = array('1', '2', '3');
// foreach ($array as $key => $value) {
//     $value = 4;
// }
// print_r($array);

// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3
// )


#109__________________________

// $var1 = ["foo", "bar", "hello", "world", "PHP", "nice"];
// $var2 = ["foo", "bar", "hello", "PHP", "nice", "language"];

// echo count(array_merge(array_diff($var1, $var2), array_diff($var2, $var1)));

# Output : 2

#110___________________________

// class Example
// {
//     public $public = '1';
//     private $prv = '2';
//     protected $prt = '3';
// }
// $arrayobj = new ArrayObject(new Example());
// var_dump($arrayobj->count());

// Output : int(1)

#112_________________________

// $x = array(10, 2, 4);
// $y = array(1 => 2, 0 => 10, 2 => 4);
// var_dump($x == $y);

#output : true

#114_________________________

// class Test
// {
//     function __call($var1, $var2)
//     {
//         $check = "'$var1'called\n";
//         $check .= print_r($var2, true);
//         return $check;
//     }
// }
// $item = new Test();
// print $item->xxx("John", "Maria", "Jason");

#output : 
// 'xxx'called
// Array
// (
//     [0] => John
//     [1] => Maria
//     [2] => Jason
// )


#129________________________________

// class A
// {
// };
// class B1 extends A
// {
// };
// class_alias('A', 'B2');
// $b1 = new B1;
// echo get_class($b1);
// $b2 = new B2;
// echo get_class($b2);

#output : B1A


#130__________________________

// class number
// {
//     public $a = 1;
//     protected $b = 2;
//     private $c = 3;
// }
// $numbers = new number();
// foreach ($numbers as $value) {
//     echo "$value";
// }

# Output : 1


#136_____________________________

// interface foo
// {
// }
// class_alias('foo', 'bar');
// echo interface_exists('bar') ? 'yes' : 'no';

# output : yes

#140____________________________

// $a = [0.001 => 'b', .1 => 'c'];
// print_r($a);

// Array
// (
//     [0] => c
// )


#143_______________________________

// class objects
// {
//     function objects($entity)
//     {
//         $entity->name = "John";
//     }
// }
// class Entity
// {
//     public $name = "Maria";
// }
// $entity = new Entity();
// $obj = new objects($entity);
// print $entity->name;

#output : jhon

#146___________________________

// $a = 5;
// $b = 4;
// $c = ($a++ * ++$b);
// echo $c; 

// # Output : 25


#168______________________

// echo strrev("!dlrow olleH");

# Output : Hello world!


#171_______________________

// $str = "An example of a long word is: Supercalifragulistic";
// echo wordwrap($str, 15, "\n");

// An example of a
// long word is:
// Supercalifragulistic
