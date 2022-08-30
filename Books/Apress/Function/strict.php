<?php

declare(strict_types=1);

function add_int(int $a, int $b): int
{
    return $a + $b;
}

// add_int(2.3, 5); // type error
// echo add_int(2, 5); // type error


function add_float(float $a, float $b): float
{
    return $a + $b;
}

echo add_float(2, 3); //not error
echo add_float(2.6, 3.9);
