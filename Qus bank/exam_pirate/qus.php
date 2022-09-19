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


#121_____________________________

// $text = 'This is text';

// $text1 = <<<'TEXT'

// $text

// TEXT;

// $text2 = <<<TEXT

// $text1

// TEXT;

// echo "$text2"; //$text


#127____________________________

// function modifyArray(&$array)

// {

//   foreach ($array as &$value) {

//     $value = $value + 1;
//   }

//   $value = $value + 2;
// }

// $array = array(1, 2, 3);

// modifyArray($array);

// print_r($array);

//OUTPUT : 2,3,6



#129_______________________________

// function fibonacci(&$x1 = 0, &$x2 = 1)

// {

//   $result = $x1 + $x2;

//   $x1 = $x2;

//   $x2 = $result;

//   return $result;
// }

// for ($i = 0; $i < 10; $i++) {

//   echo fibonacci() . ',';
// }

// Output: 1,1,1,1,1,1,1,1,1,1,


#136__________________________________

// trait MyTrait
// {

//   private $abc = 1;

//   public function increment()
//   {

//     $this->abc++;
//   }

//   public function getValue()
//   {

//     return $this->abc;
//   }
// }

// class MyClass
// {

//   use MyTrait;

//   public function incrementBy2()
//   {

//     $this->increment();

//     $this->abc++;
//   }
// }

// $c = new MyClass;

// $c->incrementBy2();

// var_dump($c->getValue());  //Output : int(3)


#139_____________________________

// class Number
// {

//   private $v;

//   private static $sv = 10;

//   public function __construct($v)
//   {
//     $this->v = $v;
//   }

//   public function mul()
//   {

//     return static function ($x) {

//       return isset($this) ? $this->v * $x : self::$sv * $x;
//     };
//   }
// }

// $one = new Number(1);

// $two = new Number(2);

// $double = $two->mul();

// $x = Closure::bind($double, null, 'Number');

// echo $x(5); //output : 50


#141________________________

// $a = array_merge([1, 2, 3] + [4 => 1, 5, 6]);

// echo $a[2];  //output : 3

// print_r($a);


#153_________________________

// class test
// {

//   public $value = 0;

//   function test()
//   {

//     $this->value = 1;
//   }

//   function __construct()
//   {

//     $this->value = 2;
//   }
// }

// $object = new test();

// echo $object->value;  // Output : 2


#154_____________________________

// class T

// {

//   const A = 42 + 1;
// }

// echo T::A;  // 43


#155______________________________________

// define('PI', 3.14);

// class T

// {

//   const PI = PI;
// }

// class Math

// {

//   const PI = T::PI;
// }

// echo Math::PI;  //output : 3.14


#157________________________________________

// function f(stdClass &$x = NULL)
// {
//   $x = 42;
// }

// $z = new stdClass;

// f($z);

// var_dump($z); // output: 42


#158___________________________________

// try {

//   class MyException extends Exception
//   {
//   };

//   try {

//     throw new MyException;
//   } catch (Exception $e) {

//     echo "1:";

//     throw $e;
//   } catch (MyException $e) {

//     echo "2:";

//     throw $e;
//   }
// } catch (Exception $e) {

//   echo get_class($e);  //output : 1:MyException


#180__________________________________________

// for ($i = 0; $i < 1.02; $i += 0.17) {

//   $a[$i] = $i;
// }

// echo count($a); //1


#181_________________________________

// $a = array('a', 'b', 'c');

// $a = array_keys(array_flip($a));

// print_r($a);

// Array
// (
//     [0] => a
//     [1] => b
//     [2] => c
// )

#182____________________________________

// print_r(array_combine(array("A", "B", "C"), array(1, 2, 3)));

// Array
// (
//     [A] => 1
//     [B] => 2
//     [C] => 3
// )

#183_______________________________

// $array = array("Sue", "Mary", "John", "Anna");

// echo $array[array_rand($array)]; // output : random value


#184________________________________

// $array = array(1, 2, 3);

// while (list(, $v) = each($array));

// var_dump(current($array)); //bool(false)

#185_____________________________

// $a = array(0, 1, 2 => array(3, 4));

// $a[3] = array(4, 5);

// echo count($a, 1); //8

#187_______________________________

// $text = <<<EOT

// The big bang bonged under the bung.

// EOT;

// preg_match_all('@b.n?g@', $text, $matches);

// print_r($matches);

// Array
// (
//     [0] => Array
//         (
//             [0] => big
//             [1] => bang
//             [2] => bong
//             [3] => bung
//         )

// )

#191 ______________________________

// $test = '100.00';
// $test = '100';

// preg_match('/^\d+(?:\.[0-9]+)?$/', $test, $matches);

// print_r($matches);


#192_________________________________

// $str = "The cat sat on the roof of their house.";

// $matches = preg_split("/(the)/i", $str, -1, PREG_SPLIT_DELIM_CAPTURE);

// print_r($matches);

// Array
// (
//     [0] => 
//     [1] => The
//     [2] =>  cat sat on 
//     [3] => the
//     [4] =>  roof of 
//     [5] => the
//     [6] => ir house.
// )

#195___________________________

// echo strpos("me myself and I", "m", 2); //3

// echo substr_compare("foobar", "bar", 3); // 0


#198___________________________

// $test = '/etc/conf.d/wireless';

// echo substr($test, strrpos($test, '/'));  ///wireless
