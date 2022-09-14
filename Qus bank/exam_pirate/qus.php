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

preg_match('/^(\d{1,2}([a-z]+))(?:\s*)\S+ (?=201[0-9])/', '21st March 2014', $matches);

print_r($matches);
