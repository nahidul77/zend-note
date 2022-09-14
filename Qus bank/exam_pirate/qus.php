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

B::test();  //Base B B A B 
