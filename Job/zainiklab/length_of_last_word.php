<?php

function lengthOfLastWord(string $str)
{
    $input_length = strlen($str);

    if (
        $input_length <= 104 &&
        preg_match('/^[A-Za-z\s]*[A-Za-z]+[A-Za-z\s]*$/', $str)
    ) {

        $len = 0;
        $x = trim($str);

        for ($i = 0; $i < strlen($x); $i++) {
            if ($x[$i] == ' ') {
                $len = 0;
            } else {
                $len++;
            }
        }

        return $len;
    } else {
        return 'Invalid input';
    }
}

$string = "Invalid input";

echo lengthOfLastWord($string);
