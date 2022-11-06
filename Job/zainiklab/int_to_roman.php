<?php

function print_roman(int $number): string
{

    if ($number <= 3999 && $number >= 1) {

        $num = [1, 4, 5, 9, 10, 40, 50, 90, 100, 400, 500, 900, 1000];
        $roman = ["I", "IV", "V", "IX", "X", "XL", "L", "XC", "C", "CD", "D", "CM", "M"];

        $i = 12;
        $result = '';
        while ($number > 0) {
            $div = floor($number / $num[$i]);
            $number = $number % $num[$i];
            while ($div--) {
                $result .= $roman[$i];
            }
            $i--;
        }
        return $result;
    }
}

echo print_roman(11); // Output : XI
