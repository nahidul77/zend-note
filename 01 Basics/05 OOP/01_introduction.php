<?php

class calculation
{
    public $a, $b, $c;

    function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1 = new calculation();

$c1->a = 20;
$c1->b = 10;

$c2 = new calculation();

$c2->a = 50;
$c2->b = 35;

echo "Sum Value of C1 : " . $c1->sum() . "\n";

echo "Subtraction Value of C2 : " . $c2->sub(), "\n";

echo "Subtraction Value of C1 : " . $c1->sub();
