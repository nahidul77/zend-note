<?php

#5 

// $str = array('message' => 'Hello, world!');
// $str = array('Hello, world!');
// $str = 'Hello, world!';

// $str = function () {
//     alert('hello, world!');
// };  // cannot be encoded

// echo json_encode($str);

#13

// $world = 'world';
// echo <<<'TEXT'
// hello $world
// TEXT;

//Output: hello $world

#extra 

// $a = 3;

// switch ($a) {
//     case 1:
//         echo 'one';
//         break;
//     default:
//         echo 'two';
//         break;
//     case 3:
//         echo 'three';
//         break;
// }

// output : three


#36 _______________________

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
//         Base::whoareyou();
//         self::whoareyou();
//         parent::whoareyou();
//         A::whoareyou();
//         static::whoareyou();
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
// B::test();

// Base B B A B 


#67 ___________

// Initialising the two datetime objects
// $datetime1 = new DateTime('2019-8-10');
// $datetime2 = new DateTime('2019-9-10');

// Calling the diff() function on above
// two DateTime objects
// $difference = $datetime1->diff($datetime2);

// Getting the difference between two
// given DateTime objects
// echo $difference->format('%R%a days');  //+31 days


#79 ___________________________

// $date = new DateTime('2014-03-15');

// var_dump($date);
// echo $date->format('d-m-Y');


#169_________________________

// try {
//     class MyException extends Exception
//     {
//     };

//     try {
//         throw new MyException;
//     } catch (Exception $e) {
//         echo "1:";
//         throw $e;
//     } catch (MyException $e) {
//         echo "2:";
//         throw $e;
//     }
// } catch (Exception $e) {
//     echo get_class($e);
// }

//1:MyException;


#179 ________________________

// for ($i = 0; $i < 1.02; $i += 0.17) {
//     $a[$i] = $i;
// }

// echo count($a);  //1

// Array
// (
//     [0] => 0.85
// )


#181_______________________________

// function counter($start, &$stop)
// {
//     echo $start;
//     if ($stop > $start) {
//         return;
//     }
//     counter($start--, ++$stop);
// }
// $start = 5;
// $stop = 2;
// counter($start, $stop); //55555


// $world = 'world';

// echo <<<'TEXT'
// hello $world
// TEXT;
