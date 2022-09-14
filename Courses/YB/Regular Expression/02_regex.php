<?php

/**
 * Quantifiers
 * 
 * * 0 or more
 * + 1 or more
 * ? 0 or one
 * {3} exact number
 * {3,5} range of number (minimum, maximum)
 * {3,} Minimum Number to infinite
 * () group
 * 
 * 
 * *n Greedy Match
 * +n Greedy Match
 * 
 * *?n Lazy Match
 * +?n Lazy Match 
 * 
 * ?=n Positive Look ahead
 * ?!n Negative Look ahead
 * ?<= Positive Lookbehind
 * ?!= Negative Lookbehind
 * ?<! Negative Lookbehind
 * 
 * 
 */


/*-------Repetition Quatifiers------- */
$string = "PHP is the web scripting phhhp language 522 of choice phhhhhhp ";

$exp = preg_match_all("/ph*/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";


$string = "1
12
123
1234";

$exp = preg_match_all("/\d*/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";


$string = "word
1word
22word
333word
4444word";

$exp = preg_match_all("/\d*word/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";


$string = "word
1word
22word
333word
4444word";

$exp = preg_match_all("/\d+word/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";


$string = "file.php
file1.php
file23.php
file456.php";

$exp = preg_match_all("/file\d*.php/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";


$string = "file.php
file1.php
file23.php
file456.php";

$exp = preg_match_all("/file\d*\.php/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

/*-------Repetition Quantifiers + ------- */
$string = "o
oh
ohhhh
ohhhhhh";

$exp = preg_match_all("/\oh+/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";


$string = "word
1word
22word
333word
4444word";

$exp = preg_match_all("/\d+word/i", $string, $array); //---- leave simple (word)
echo "<pre>";
print_r($array);
echo "</pre>";


$string = "212-456-7896
212*456*7896";

$exp = preg_match_all("/\d+[-]\d+[-]\d+/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";


$string = "PHP is the web scripting ppphp language 522 of choice.";

$exp = preg_match_all("/p+/i", $string, $array);
echo "<pre>";
print_r($array);
echo "</pre>";

/*-------Repetition Quantifiers ? ------- */
$string = "PHP is the web scripting ppphp language of choice.";

$exp = preg_match_all("/scrir?pting/i", $string, $array); //-- if "r" is doubt/optional is present or not

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "color 
colour";

$exp = preg_match_all("/colou?r/i", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "Jan
January";

$exp = preg_match_all("/Jan(uary)/i", $string, $array); //<--- (uary) is optional

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "August 22nd
Aug 22
Aug 22nd
August 22";

$exp = preg_match_all("/Aug(ust)? 22(nd)?/i", $string, $array); //<--- (uary) is optional

echo "<pre>";
print_r($array);
echo "</pre>";


/*-------Limiting Repeatition------- */
$string = "o
oh
ohhhh
ohhhhhh";

$exp = preg_match_all("/h{2}/i", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "o
oh
ohhhh
ohhhhhh";

$exp = preg_match_all("/\ph{2,}/i", $string, $array); //--- minimum char "h" is 2 time together

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "o
oh
ohhhh
ohhhhhh";

$exp = preg_match_all("/\ph{2,2}/i", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";

/*-------salary in 6 digits------- */
$string = "12000 
250000
45820
152222";

$exp = preg_match_all("/\d{6,}/i", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "PHP is the web scripting ppphp language of choice.";
$exp = preg_match_all("/ph{1,}/i", $string, $array); //--- minimum char "h" is 1 after "p"

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "PHP is the web scripting ppphp language of choice.";
$exp = preg_match_all("/s[a-zA-Z]{2,}/", $string, $array); //--- Not Clear

echo "<pre>";
print_r($array);
echo "</pre>";


/*-------Greedy And Lazy Match------- */
$string = "PHP is the web scripting ppphp language of choice.";
$exp = preg_match_all("/s[a-z]*i/", $string, $array); //--- Greedy Match or use (+)

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "PHP is the web scripting ppphp language of choice.";
$exp = preg_match_all("/s[a-z]*?i/", $string, $array); //---  Lazy Match

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "<h1>PHP is the web scripting php language of choice.</h1>";
$exp = preg_match_all("/<.*>/", $string, $array); //--- Greedy Match or use (+)

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "<h1>PHP is the web scripting php language of choice.</h1>";
$exp = preg_match_all("/<.*?>/", $string, $array); //--- Lazy Match

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "<h1>PHP is the 'web' scripting 'php' language of choice.</h1>";

$exp = preg_match_all("/.+/", $string, $array); //---  Greedy Match

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "<h1>PHP is the 'web' scripting 'php' language of choice.</h1>";
$exp = preg_match_all("/.+?/", $string, $array); //--- Lazy Match

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "PHP is the web scripting ppphp language of choice.";
$exp = preg_match_all("/^p/i", $string, $array); //--- starting with

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "PHP is the web scripting ppphp language of choice.";
$exp = preg_match_all("/\w+/i", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "PHP is the web scripting ppphp language of choice.";
$exp = preg_match_all("/^\w+/i", $string, $array); //----select first word only

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "PHP is the web scripting ppphp language of choice.";
$exp = preg_match_all("/^\w+$/i", $string, $array); //----select only last word

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "PHP is the web scripting ppphp language of choice.";
$exp = preg_match_all("/.$/i", $string, $array); //--- end with

echo "<pre>";
print_r($array);
echo "</pre>";


/*-------Grouping ????????????????????????------- */
$string = "possible
        impossible";
$exp = preg_match_all("/(im)?possible/", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "212-456-7896";
$exp = preg_match_all("/\d{3}-(\d{3})-(\d{4})/", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "play
        player
        played
        playing
        playon
        play123";
$exp = preg_match_all("/play([a-z]+)?/", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "file.txt
        file1.xlsx
        file20.docx
        fileabc1.pptx";

$exp = preg_match_all("/file\w*\.(txt|xlsx|docx|pptx)/", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "I like Toyota and Honda
        I like Toyota and Honda and Toyota
        I like Toyota and Honda and Honda";

$exp = preg_match_all("/I like (Toyota) and (Honda) and \1/", $string, $array); //<--- Targeting Group 1

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "I like Toyota and Honda
        I like Toyota and Honda and Toyota
        I like Toyota and Honda and Honda";

$exp = preg_match_all("/I like (Toyota) and (Honda) and \2/", $string, $array); //<--- Targeting Group 2

echo "<pre>";
print_r($array);
echo "</pre>";

/*------- Assertion-------?=n <--- Positive Lookahead------- */

$string = "bill paid
        bill not paid
        bill paid
        bill not paid";
$exp = preg_match_all("/bill(?=\spaid)/", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "100 USD
        250 JPY
        900 EUR
        856 INR "; //******************************** Continue FROM HERE
$exp = preg_match_all("/\d{3}(?=\sUSD)/", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "100 USD
        250 JPY
        900 EUR
        856 INR "; //******************************** Continue FROM HERE
$exp = preg_match_all("/\d+(?=\sUSD)/", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";


/*------- Assertion-------?!n <--- Negative Look Ahead------- */
$string = "bill paid
        bill not paid
        bill paid
        bill not paid";
$exp = preg_match_all("/bill(?!\spaid)/", $string, $array); //<-- select bill whom after not coming paid

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "100 USD
        250 JPY
        900 EUR
        856 INR "; //******************************** Continue FROM HERE
$exp = preg_match_all("/\d{3}(?!\sUSD)/", $string, $array); //<-- select currencies other than USD --- \d+(?=\sUSD) 

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "100 USD
        250 JPY
        900 EUR
        856 INR "; //******************************** Continue FROM HERE
$exp = preg_match_all("/\d{3}(?!\s(JPY|INR))/", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";


/*------- Assertion-------Positive Look behind ?<=------- */
$string = "free course
        paid course
        free course
        paid course";
$exp = preg_match_all("/(?<=free\s)course/", $string, $array); //<--- select only course which will come after free word 

echo "<pre>";
print_r($array);
echo "</pre>";


$string = "social worker
        hard worker
        lazy worker
        poor worker
        intelligent worker";
$exp = preg_match_all("/(?<=social\s)worker/", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";

/*------- Assertion-------Negative Look behind------- */

$string = "social worker
        hard worker
        lazy worker
        poor worker
        intelligent worker";
$exp = preg_match_all("/(?<!social\s)worker/", $string, $array); //--- all except social

echo "<pre>";
print_r($array);
echo "</pre>";
