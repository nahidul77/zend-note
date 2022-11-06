<?php

function length_of_last_word(string $str): int
{
    $input_length = strlen($str);

    // checking the constraints
    if (
        $input_length <= 104 &&
        preg_match('/^[A-Za-z\s]*[A-Za-z]+[A-Za-z\s]*$/', $str)
    ) {

        $len = 0;
        $x = trim($str);

        for ($i = 0; $i < $input_length; $i++) {
            if ($x[$i] == ' ') {
                $len = 0;
            } else {
                $len++;
            }
        }

        return $len;
    }
}

$string = "Invalid input";

echo lengthOfLastWord($string);
