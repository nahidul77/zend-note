<?php

#702__________________________

// $a = ['one' => 'php', 'two' => 'javascript', 'three' => 'python'];
// $b = ['python', 'javascript', 'php'];
// echo (array_values(array_reverse($a)) === $b) ? 'true' : 'false'; 

//true


#710____________________________

// class someclass
// {
//     public $someprop;
//     function __construct()
//     {
//         $this->someprop = 1;
//     }
// }

// function somefunc(&$instance)
// {
//     unset($instance);
// }

// $instance = new someclass();
// somefunc($instance);
// var_dump($instance);

// object(someclass)#1 (1) {
//     ["someprop"]=>
//     int(1)
//   }


#713____________________

// echo ("0.00") ? "mary" : "angie";

//mary


#724_________________

// $numbers = [10, "10", 10.5, "10.5", null, true, false];
// $i = 0;
// foreach ($numbers as $number) {
//     if (is_int($number))
//         $i++;
//     else
//         $i--;
// }
// echo $i; //-5

#726_____________________

// $language = 'PHP';
// function PHP()
// {
//     return 'This is the ' . __FUNCTION__ . ' function';
// }
// echo $language(); //This is the PHP function

#743_____________________

// $var = 2;
// $str = 'aabbccddeeaabbccdd';
// echo str_replace('a', 'z', $str, $var);


#754__________________

// function addValues()
// {
//     $sum = 0;
//     for ($i = 0; $i < func_num_args(); $i++) {
//         $sum += func_get_arg($i);
//     }
//     return $sum;
// }
// echo addValues(1, 2, 3);  

#output : 6

#756_______________________

// $v1 = 1;
// $v2 = 2;
// $v3 = 3;
// function myFunction()
// {
//     $GLOBALS['v1'] *= 2;
//     $v2 *= 2;
//     global $v3;
//     $v3 *= 2;
// }
// myFunction();
// echo "$v1$v2$v3";

// # output : 226

#759____________________________

// interface myBaseClass1
// {
//     public function doSomething();
//     public function specialFunction1();
// }
// interface myBaseClass2
// {
//     public function doSomething();
//     public function specialFunction2();
// }
// class myClassA implements myBaseClass1, myBaseClass2
// {
//     function doSomething()
//     {
//         echo '...';
//     }
//     public function specialFunction1()
//     {
//         echo '...';
//     }
//     public function specialFunction2()
//     {
//         echo '...';
//     }
// }
// $a = new myClassA();
// $a->doSomething();

// #output  : ...


#760____________________________

// abstract class myBaseClass
// {
//     abstract protected function doSomething();
//     function threeDots()
//     {
//         return '...';
//     }
// }
// class myClassA extends myBaseClass
// {
//     protected function doSomething()
//     {
//         echo $this->threeDots();
//     }
// }

// $a = new myClassA();
// $a->doSomething();

// Fatal error: Uncaught Error: Call to protected method myClassA::doSomething() from global scope


#768______________________

// class A
// {
//     public function __call($f, $arg)
//     {
//         return static::who();
//     }
//     public static function who()
//     {
//         echo __CLASS__;
//     }
// }
// class B extends A
// {
//     public static function who()
//     {
//         echo __CLASS__;
//     }
// }
// $b = new B();
// echo $b->test();

#output : B


#769___________________________

// class A
// {
//     protected $a = '';
//     function x()
//     {
//         echo ++$this->a;
//     }
// }
// $a = new A();
// $b = $a;
// $c = new A();
// $b->x();
// $a->x();
// $c->x();
// $b = $c;
// $b->x();
// $a->x();

#output : 12123

#774___________________________

// $a = null;
// $b = 1;
// $c = 'c';

// echo $a ?? '!a';
// echo $b ?? '!b';
// echo $c ?? '!c';
// echo $d ?? '!d';

#output : !a1c!d


#776________________________

// echo 1 <=> 2;
// echo 'aa' <=> 'zz';
// echo [1, 2, 3] <=> [7, 8, 9];

#output : -1-1-1

#777____________________

// interface Additionable
// {
//     public function add($x, $y);
// }

// function average($a, $b)
// {
//     $anon = new class implements Additionable
//     {
//         public function divide($x, $y)
//         {
//             return $x / $y;
//         }
//         public function add($x, $y)
//         {
//             return $x + $y;
//         }
//     };

//     $sum = $anon->add($a, $b);
//     $average = $anon->divide($sum, 2);
//     return $average;
// }
// echo average(10, 70);  // 40

#779______________________

// class MyEx1 extends Exception
// {
// }
// class MyEx2 extends MyEx1
// {
// }

// function checkValue(float $a): void
// {
//     if ($a < 10) {
//         throw new MyEx1('too small.');
//     }
// }

// try {
//     checkValue(50);
//     checkValue(5);
// } catch (MyEx2 $e) {
//     echo $e->getMessage();
// } catch (Exception | MyEx1 $e) {
//     echo get_class($e);
// } finally {
//     echo 'End';
// }

#output : MyEx1End

#782____________________

// function getReduced(int $x)
// {
//     $x--;
//     return $x;
// }
// function getIncresed(int $x): void
// {
//     $x++;
//     return $x;
// }

// $x = 0;
// $x = getReduced($x);
// $x = getIncresed($x);
// echo $x;

# Fatal error: A void function must not return a value

#783_____________________

// class MyCollection
// {
//     private $coll = [];
//     public function add(?int $x): void
//     {
//         $this->coll[] = $x ?? 0;
//     }
//     public function getElements(): iterable
//     {
//         return $this->coll;
//     }
// }

// $collection = new MyCollection();
// $collection->add(null);
// $collection->add(1);
// $collection->add(0);
// print_r($collection->getElements());

// Array
// (
//     [0] => 0
//     [1] => 1
//     [2] => 0
// )

#785__________________________

// class ComparedCollection
// {
//     private $es;
//     private function __construct($es)
//     {
//         $this->es = $es;
//     }

//     public function include(?int $number)
//     {
//         $this->es[] = $number ?? ($number <=> 0);
//     }

//     public function list()
//     {
//         return $this->es;
//     }

//     public static function new()
//     {
//         return new self([]);
//     }
// }

// $c = ComparedCollection::new();
// $c->include(-5);
// $c->include(0);
// $c->include(null);
// $c->include(5);
// print_r($c->list());

// Array
// (
//     [0] => -5
//     [1] => 0
//     [2] => 0
//     [3] => 5
// )

#793________________

// $x = true and false;
// $y = (true and false);
// var_dump($x);
// var_dump($y);

// bool(true)
// bool(false)


#795___________________

// $array = array(1, 2, 3, 4, 5);
// foreach ($array as $i => $value) {
//     unset($array[$i]);
// }

// $array[] = 6;
// print_r($array);

// Array
// (
//     [5] => 6
// )


#798_______________________

// function doSomething($a, $b)
// {
//     return $a / $b;
// }
// try {
//     doSomething(1);
// } catch (Exception $ex) {
//     echo 1;
// } catch (ArgumentCountError $ace) {
//     echo 2;
// } catch (DivisionByZeroError $dbze) {
//     echo 3;
// }

# output : 2

#799_________________________

// interface Interface1
// {
//     public function getFoo();
//     public function setFoo($value);
// }
// interface Interface2
// {
//     public function getFoo();
//     public function setBar();
// }
// class Baz implements Interface1, Interface2
// {
//     public function getFoo()
//     {
//         return 'foo';
//     }

//     public function setFoo($value)
//     {
//         $this->foo = $value;
//     }
//     public function setBar($value)  //Fatal error here, must be compatible with Interface2::setBar()
//     {
//         $this->bar = $value;
//     }
// }

// $baz = new Baz();
// $baz->getFoo();


#801___________________________
// class Magic
// {
//     public $a = "A";
//     protected $b = ["a" => "A", "b" => "B", "c" => "C"];
//     protected $c = [1, 2, 3];

//     public function __get($v)
//     {
//         echo "$v,";
//         return $this->b[$v];
//     }

//     public function __set($var, $val)
//     {
//         echo "$var: $val,";
//         return $this->$var = $val;
//     }
// }

// $m = new Magic();
// echo $m->a . "," . $m->b . "," . $m->c . ",";
// $m->c = "CC";
// echo $m->a . "," . $m->b . "," . $m->c;

// b,c,A,B,C,c: CC,b,c,A,B,C

#804________________________

// function func($x, $x = 2, $x = 3)
// {
//     return $x;
// }
// echo func(3);

# Fatal error: Redefinition of parameter $x

#805_______________________

// $a = ['a' => 20, 1 => 36, 40];
// array_rand($a);
// echo $a[0];

// Warning: Undefined array key 0 in 


#qustions_______________________

// $a = [1, 2, 3];

// unset($a[1]);

// print_r($a);


// Array
// (
//     [0] => 1
//     [2] => 3
// )