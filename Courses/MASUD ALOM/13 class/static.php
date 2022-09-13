<?php

function increment()
{
    static $a = 1;

    return $a++;
}

echo increment(); //1
echo increment(); //2 
echo increment();//3 
