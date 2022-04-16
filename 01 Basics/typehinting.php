<?php

declare(strict_types=1);

function add(int $a, int $b)
{
    return $a + $b;
}


echo add(2 ,3); //5
// echo add(2.5 ,3); // Fatal Error Uncaught TypeError: add(): Argument #1 ($a) must be of type int, float given.



function minus($a, $b):int
{
    return $a - $b;
}

echo minus(5, 4);
// echo minus(5.5, 4); //Fatal error: Uncaught TypeError: minus(): Return value must be of type int, float returned

