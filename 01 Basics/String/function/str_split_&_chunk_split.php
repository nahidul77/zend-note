 <?php
    /*-------String Split Function------- */
    $str = "Nahidul Islam";

    $array = str_split($str);

    print_r($array);

    /*-------String Split Length------- */

    $array2 = str_split($str, 3);

    print_r($array2);

    /*-------String Chunk Function------- */


    $newStr = chunk_split($str, 1, ".");
    echo $newStr . "\n";

    $newStr = chunk_split($str, 3, "-");
    echo $newStr . "\n";

    $newStr = chunk_split($str, 3, "_");
    echo $newStr . "\n";
