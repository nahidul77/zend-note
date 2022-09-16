<?php

#12____________________________________

// class Base
// {

//     protected static function whoami()
//     {

//         echo "Base ";
//     }

//     public static function whoareyou()
//     {

//         static::whoami();
//     }
// }

// class A extends Base
// {

//     public static function test()
//     {

//         Base::whoareyou();  //Base

//         self::whoareyou(); //B

//         parent::whoareyou();  // B

//         A::whoareyou();  // A

//         static::whoareyou(); // B
//     }

//     public static function whoami()
//     {

//         echo "A ";
//     }
// }

// class B extends A
// {

//     public static function whoami()
//     {

//         echo "B ";
//     }
// }

// B::test();  //Base B B A B 


#31_________________________________________

// class A
// {

//     public $a = 1;

//     public function __construct($a)
//     {
//         $this->a = $a;
//     }

//     public function mul()
//     {

//         return function ($x) {

//             return $this->a * $x;
//         };
//     }
// }

// $a = new A(2);

// $a->mul = function ($x) {

//     return $x * $x;
// };

// $m = $a->mul();


// echo $m(3);  // 6


#40___________________________

// printf('%010.6f', 22); //022.000000

#47__________________________

// preg_match('/^(\d{1,2}([a-z]+))(?:\s*)\S+ (?=201[0-9])/', '21st March 2014', $matches);

// print_r($matches);


/*
/
^(\d{1,2}([a-z]+))(?:\s*)\S+ (?=201[0-9])
/
^ asserts position at start of the string
1st Capturing Group (\d{1,2}([a-z]+))
\d matches a digit (equivalent to [0-9])
{1,2} matches the previous token between 1 and 2 times, as many times as possible, giving back as needed (greedy)
2nd Capturing Group ([a-z]+)
Match a single character present in the list below [a-z]
+ matches the previous token between one and unlimited times, as many times as possible, giving back as needed (greedy)
a-z matches a single character in the range between a (index 97) and z (index 122) (case sensitive)
Non-capturing group (?:\s*)
\s matches any whitespace character (equivalent to [\r\n\t\f\v ])
* matches the previous token between zero and unlimited times, as many times as possible, giving back as needed (greedy)
\S matches any non-whitespace character (equivalent to [^\r\n\t\f\v ])
  matches the character   with index 3210 (2016 or 408) literally (case sensitive)
Positive Lookahead (?=201[0-9])
Assert that the Regex below matches
201 matches the characters 201 literally (case sensitive)
Match a single character present in the list below [0-9]
0-9 matches a single character in the range between 0 (index 48) and 9 (index 57) (case sensitive)

*/


#54____________________________

// $str = "<a href='#'>demo.com</a>";

// echo htmlentities($str) . PHP_EOL; // &lt;a href='#'&gt;demo.com&lt;/a&gt;
// echo htmlentities($str, ENT_QUOTES); // &lt;a href=&quot;#&quot;&gt;demo.com&lt;/a&gt;


#66_________________________________

// function counter($start, &$stop)

// {
//     echo $stop;

//     if ($stop > $start) {

//         return;
//     }

//     counter($start--, ++$stop);
// }

// $start = 5;

// $stop = 2;

// counter($start, $stop); //23456


#83______________________

// echo "1" + 2 * "0x02";  //1


#91_______________________

// namespace MyFramework\DB;

// class MyClass
// {

//     static function myName()
//     {

//         return __METHOD__;
//     }
// }

// print MyClass::myName();   //MyFramework\DB\MyClass::myName


#93_______________________

// class C
// {

//     public $ello = 'ello';

//     public $c;

//     public $m;

//     function __construct($y)
//     {

//         $this->c = static function ($f) {

//             // INSERT LINE OF CODE HERE
//             return $f() . "ello";
//         };

//         $this->m = function () {

//             return "h";
//         };
//     }
// }

// $x = new C("h");

// $f = $x->c;

// echo $f($x->m); //hello



#94______________________________________

// function z($x)
// {

//     return function ($y) use ($x) {

//         return str_repeat($y, $x);
//     };
// }

// $a = z(2);

// $b = z(3);

// echo $a(3) . $b(2);  // 33222


#96____________________________________

// class C
// {

//     public $x = 1;

//     function __construct()
//     {
//         ++$this->x;
//     }

//     function __invoke()
//     {
//         return ++$this->x;
//     }

//     function __toString()
//     {
//         return (string) --$this->x;
//     }
// }

// $obj = new C();

// echo $obj(); //3


#98________________________________

// class Test
// {

//     public function __call($name, $args)

//     {

//         call_user_func_array(array('static', "test$name"), $args);
//     }

//     public function testS($l)
//     {

//         echo "$l,";
//     }
// }

// class Test2 extends Test
// {

//     public function testS($l)
//     {

//         echo "$l,$l,";
//     }
// }

// $test = new Test2();

// $test->S('A');  //A,A,



#102_________________________________________

// class Magic
// {

//     protected $v = array("a" => 1, "b" => 2, "c" => 3);

//     public function &__get($v)
//     {

//         return $this->v[$v];
//     }
// }

// $m = new Magic();

// $m->d[] = 4;

// echo $m->d[0];  //4


#113_________________________________

// $date = new DateTime('2014-03-15');

// echo $date->format('Y-m-d') . PHP_EOL;  //2014-03-15

// $date->sub(new DateInterval('P1M'));

// echo $date->format('Y-m-d') . PHP_EOL; //2014-02-15

// $date->setDate(2014, 2, 15);

// echo $date->format('Y-m-d') . PHP_EOL; //2014-02-15

// $date->modify('-1 month');

// echo $date->format('Y-m-d') . PHP_EOL; //2014-01-15


#115___________________________________

// class Foo implements ArrayAccess
// {

//   function offsetExists($k)
//   {
//     return true;
//   }

//   function offsetGet($k)
//   {
//     return 'a';
//   }

//   function offsetSet($k, $v)
//   {
//   }

//   function offsetUnset($k)
//   {
//   }
// }

// $x = new Foo();

// echo array_key_exists('foo', $x) ? 'true' : 'false';  //false

/**
 * If you call array_key_exists() on an object of a class that implements ArrayAccess, ArrayAccess::offsetExists() wil NOT be called.
 */


#117________________________________

// class Bar
// {

//   private $a = 'b';

//   public $c = 'd';
// }

// $x = (array) new Bar();

// echo array_key_exists('a', $x) ? 'true' : 'false';

// echo '-';

// echo array_key_exists('c', $x) ? 'true' : 'false';

//false-true


#119____________________________

// $a = array('a', 'b' => 'c');

// echo property_exists((object) $a, 'a') ? 'true' : 'false';

// echo '-';

// echo property_exists((object) $a, 'b') ? 'true' : 'false';

//false-true
