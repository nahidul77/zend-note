<?php

/**
 * Test No 4
 */

#Q1 
// $pieces = explode('/', '///');

// print_r($pieces); //output : 0 elements


#Q2 

// function strle($str)
// {
//     return strlen($str) * 2;
//     // return double the string length
// }
// print strle("Hello world!");


#Q3

// class A
// {
//     protected $x = array();

//     public function &getX()
//     {
//         return $this->x;
//     }
// }

// $a = new A();

// array_push($a->getX(), 'one');
// array_push($a->getX(), 'two');
// echo count($a->getX());

//Output : 2

#Q8

// $test = '/etc/conf.d/wireless';
// echo strrpos($test, '/'); // 11
// echo substr($test, strrpos($test, '/')); // /wireless

#Q9 

// class a
// {
//     public $val;
// }
// function renderVal(a $a)
// {
//     if ($a) {
//         echo $a->val;
//     }
// }
// renderVal(null); //An error, because null is not an instance of 'a

#Q13

// $a = array_merge([1, 2, 3] + [4 => 1, 5, 6]);
// print_r($a); 
// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3
//     [3] => 1
//     [4] => 5
//     [5] => 6
// )
// echo $a[2]; //3

#Q17

// $array = array(1, 2, 3);
// while (list($k, $v) = each($array)) {
//     echo $k . '=>' . $v . PHP_EOL;
// };
// var_dump(current($array)); //bool(false)

#Q18

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


#Q19

// echo strpos('me myself and I', 'm', 2); //3

#Q24

// $str = "The cat sat on the roof of their house.";
// $matches = preg_split("/(the)/i", $str); //3
// print_r($matches);

#Q27

// echo 0x33, ' monkeys sit on ', 011, 'trees.'; // output: 51 monkeys sit on 9trees.

#Q28

/**
 * Final Keyword
 * In PHP, Final keyword is applicable to only class and class methods. We cannot declare as Final in PHP.
 * So if we declare class method as a Final then that method cannot be override by the child class.
 * Same as method if we declare class as a Final then that class cannot be extended any more.
 */

#Q30 

// $a = array("A", "Cat", "Dog", "A", "Dog");
// print_r(array_count_values($a));

// Array
// (
//     [A] => 2
//     [Cat] => 1
//     [Dog] => 2
// )


#Q31

// function modifyArray(&$array)
// {
//     foreach ($array as &$value) {
//         $value = $value + 1;
//     }
//     print_r($array);
//     $value = $value + 2;
// }

// $array = array(1, 2, 3);
// modifyArray($array);

// print_r($array);

// (
//     [0] => 2
//     [1] => 3
//     [2] => 4
// )

// Array
// (
//     [0] => 2
//     [1] => 3
//     [2] => 6
// )