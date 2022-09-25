<?php

#401___________

// $str = "It's\"good\"";
// echo addslashes($str);

#output : It\'s\"good\"

#402_______________

// $number = 5;
// $len = 3;
// $pad = '0';
// echo str_pad($number, $len, $pad, STR_PAD_LEFT);  //005

#405_____________________

// $name = 'Judy';
// $str1 = <<<EOF
// Hello $name
// EOF;
// $str2 = <<<'EOF'
// Goodbye $name;
// EOF;

// if (strpos($str1, $name) === false) {
//     echo 'a';
// } else {
//     echo 'b';
// }

// if (strpos($str2, $name) === false) {
//     echo 'c';
// } else {
//     echo 'd';
// }

#output : bc

#406_______________________

// $str = 'stingers';
// echo strtr($str, 'st', 'bl');

#output : blingerb

#407__________________________

// $foo = 'bar';
// echo '$foo\'' . "$foo\'";

# Output : $foo'bar\'

#408___________________________

// $str = 'val1,val2,,val4,';
// echo count(explode(',', $str)); //5

#410_____________________________

// $str = "days=Mon&days=Wed" . "&fruit[1]=Apple&fruit[]=Banana&age=13";
// parse_str($str, $output);
// //gettypewillreturn'array'or'string'
// echo gettype($output['days']);
// echo '-';
// //array_search willreturnthekey
// //wherethefirstargumentislocated
// echo array_search('Banana', $output['fruit']);
// echo '-';
// echo array_key_exists('age', $output) ? $output['age'] : 0;

// string-2-13

#411________________________________

// $html = '<p>line1line2</p>';
// echo strip_tags($html, 'br');

#output : line1line2

#416____________________________

// $str = 'MY STRING';
// $funcs = array();

// //whichlinegoeshere?
// array_push($funcs, 'strtolower', 'ucfirst');

// foreach ($funcs as $func) {
//     $str = $func($str);
// }

// echo ($str == 'My string') ? "Correct" : "Incorrect";

# Output : Correct

#417_______________________

// $str = 'abcd';
// echo substr($str, 0, 1);
// echo substr($str, 0, -1);
// echo substr($str, 3, 1);
// echo substr($str, 3);
// echo substr($str, -3);

#output : aabcddbcd

#418__________________

// $str = nl2br("foo\nbar");
// echo $str . PHP_EOL;

// #nl2br doesn't remove the \n
// $str = str_replace("\n", "", $str);

// echo nl2br($str);

// foo<br />
// bar
// foo<br />bar


#419______________________

// echo strcmp(5678, '5678');

# output : 0


#420_____________________

// $test1 = strcmp('hello', "hello");
// $test2 = strcmp("Hello", "hello");
// $test3 = strcmp('60', '500');

// if ($test1 == 0) {
//     echo "a";
// } elseif ($test1 < 0) {
//     echo "b";
// } else {
//     echo "c";
// }

// if ($test2 == 0) {
//     echo "d";
// } elseif ($test2 < 0) {
//     echo "e";
// } else {
//     echo "f";
// }

// if ($test3 == 0) {
//     echo "g";
// } elseif ($test3 < 0) {
//     echo "h";
// } else {
//     echo "i";
// }

#output : aei


#421_________________________

// $haystack = 'abcda';
// $needle = 'a';
// $pos = strpos($haystack, $needle);

// if (!$pos) {
//     echo "miss";
// } else {
//     echo "hit" . $pos;
// }

#output : miss


#422_________________________

// $str1 = '57channels';
// $str2 = '1/2apackofcigarettes';
// $str3 = '0x10';

// if ($str1 == 57) {
//     echo 'a';
// } else {
//     echo 'b';
// }

// if ($str2 == 0.5) {
//     echo 'c';
// } elseif ($str2 == 1) {
//     echo 'd';
// } else {
//     echo 'e';
// }

// if ($str3 == 0) {
//     echo 'f';
// } elseif ($str3 == 16) {
//     echo 'g';
// } //0x10is16indecimal
// elseif ($str3 == 0x10) {
//     echo 'h';
// }

#output : adf

#423_____________________________

// $a = 0.5;
// $b = 0.1;
// $c = 16;
// echo sprintf('%01.2lf %.1lf 0x%x', $a, $b, $c);  //0.50 0.1 0x10

#424___________________________

// $str = printf('%.1f', 7.1);
// echo trim('PHP' . $str);

#output : 7.1PHP3

#425___________________________

// $number1 = 250;
// $number2 = 7;
// $format = "%1$03d";
// echo sprintf($format, $number1);
// echo sprintf($format, $number2);

#output : 250007

#426_________________________

// $str = 'I am 30';
// $vals = sscanf($str, '%s %s %d');

// echo trim($vals[0] . ' ' . $vals[1] . ' ' . $vals[2]);

#output : I am 30


#429__________________________

// $str = '31337';
// $format = '%1d%1d%1d%1d%1d';
// $digits = sscanf($str, $format);
// print_r($digits);

// Array
// (
//     [0] => 3
//     [1] => 1
//     [2] => 3
//     [3] => 3
//     [4] => 7
// )

#430__________________________

// $m = 3;
// $n = 0;
// function l()
// {
//     $m = 0;
//     $m++;
//     global $n;
//     return array($n, $m);
// }
// echo implode((L(l())), ','); //0,1

#431________________________

// class M
// {
//     function m()
//     {
//         echo "M";
//     }
//     function construct()
//     {
//         echo "mmm";
//     }
// }
// $m = new M();
// $m->m(); 

#output : MM

#433____________

// $a = 4 << 2 + 1;
// echo $a; // Output : 32

#438________________________

// $pattern = '/[a-z]{4}/';
// $string = 'Mary had a little lamb';
// $matches = preg_match($pattern, $string, $matchess);
// print_r($matches); // 1
// print_r($matchess);

// Array
// (
//     [0] => litt
// )

#441_____________________

// ob_start();
// echo "dreaming";
// $ob = ob_get_contents();
// echo strlen($ob);
// ob_flush();

#output : dreaming8

#443_______________________

// $a = "a,b,c,d,e f,g";
// $b = array_merge(explode(',', $a), array("a", "b"));
// echo count($b); // Output : 8

#444____________________

// echo 8 + 0x8 + 80 + 0x80; // 224

// echo "4" + 05 + 011 + ord('a'); //115

#447_______________________

// $a = 7;
// $b = 4;
// function b($a, $b)
// {
//     global $a, $b;
//     $a += 7;
//     $a++;
//     $b += $a;
//     return true;
// }
// echo $b, $a;  //47


#450___________________________

// $a = "0";
// echo strlen($a); //1
// echo empty($a) ? $a : 5; // 0
// echo $a ?: 5; // 5

#454________________________

// $a = range(3, 9);

// foreach ($a as $b) {
//     switch ($b) {
//         case 3:
//             $b = 7;
//         case 7:
//             $b = 3;
//         default:
//             //donothing
//     }
// }

// echo implode('-', $a);

#output : 3-4-5-6-7-8-9

#457_______________________

// function a($a)
// {
//     echo $a . "&";
// }
// function b($a)
// {
//     echo "-" . $a;
// }
// $a = "!";
// $b = &$a;
// echo a(b($b)); // OUtput : -!&

#461_________________________

// $wish_list = array(
//     1 => "RomeoandJuliet",
//     4 => "BadScience",
//     2 => "ToKillAMockingbird"
// );
// print_r(sort($wish_list)); // Output : 1


#465__________________________

// function print_conditional()
// {
//     static $x;
//     if ($x++ == 1) echo "many \t";
//     echo "good \t";
//     echo "things \t";
//     return $x;
// }

// $x = 1;
// print_conditional();
// $x++;
// print_conditional();

#output : good 	things 	many 	good 	things 	

#467_________________________

// $a = 1;
// function calculate()
// {
//     global $a;
//     $a += 7;
//     $a = $a * 043;
//     return --$a;
// }
// echo $a; // 1

#468___________________________

// function format(&$item)
// {
//     $item = strtoupper($item) . '.';
//     return $item;
// }
// $shopping = array("fish", "bread", "eggs", "jelly", "apples");
// array_walk($shopping, "format");
// $shopping = sort($shopping);
// echo $shopping[1];

#output : nothing (no output)

#469__________________________

// class Content
// {
//     public function publish()
//     {
//         $this->published = true;
//         $this->article();
//         return true;
//     }
//     protected function article()
//     {
//         echo "<i>Article:</i>";
//     }
// }
// class Article extends Content
// {
//     public function article()
//     {
//         echo "<i>Post:</i>";
//     }
// }

// $post = new Article();
// echo $post->publish();

// <i>Post:</i><i>Post:</i>1

#474_________________________

// echo chr((ord('a') + ord('A')) / 2);  //Q

#478__________________________

// $a = 0xf2 + 0x09;
// $b = $a >> 3;
// echo $b; //output : 31


#482_________________________

// interface A
// {
// }
// class C
// {
// }
// class B extends C
// {
// }
// class E extends C implements A
// {
// }
// class D extends E
// {
// }
// $b = new B();
// $e = new E();
// $c = new C();
// $a = new B();
// $d = new D();

// echo $d instanceof A ? 'true' : 'false';

// echo $d instanceof C ? 'true' : 'false';

// echo $e instanceof A ? 'true' : 'false';

// echo $c instanceof C ? 'true' : 'false';

#output : true true true true


#486_______________________

// $i = function ($j) {
//     $i = $j + 4;
//     return $i++;
// };
// $j = 6;
// echo $i($j);  //10

#487________________________

// function swings(&$park)
// {
//     $park++;
//     $park = roundabout($park);
// }
// function roundabout($park)
// {
//     $park *= 2;
// }

// $park = 17;
// echo swings($park); //nothing

#488_____________________

// function print_conditional($x)
// {
//     if ($x++ == 1) echo "none ";
//     echo "one ";
//     echo "none ";
//     return $x;
// }
// $x = 1;
// print_conditional($x);
// $x++;
// print_conditional($x);

#output : none one none one none 


#490________________________

// $g = range(5, 8);
// $h = array("a", "b", "c", "e");
// for ($i = 0; $i < count($g); $i++) {
//     foreach ($h as $j) {
//         echo $i . $j;
//         break;
//     }
// }

#output : 0a1a2a3a

#491__________________________

// $s = "This sentence contains many words";
// $r = explode(' ', ucfirst($s));
// sort($r);
// echo implode(',', $r);

#output : This,contains,many,sentence,words


#496_______________________

// class M
// {
//     public function identify()
//     {
//         echo self::myName();
//     }
//     public function myName()
//     {
//         return "Mike";
//     }
// }
// class N extends M
// {
//     public function myName()
//     {
//         return "November";
//     }
// }
// function m(N $n)
// {
//     $n->identify();
// }
// $m = new N();
// m($m);  // Mike
