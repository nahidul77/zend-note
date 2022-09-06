<?php

## Q2

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

// echo $obj(); // 3

// echo $obj; // 2



## 06 ____________________

// class T
// {
//     const A = 42 + 1;
// }

// echo T::A;  //43


## 07 _____________

echo substr_compare('foobar', 'bar', 3);
