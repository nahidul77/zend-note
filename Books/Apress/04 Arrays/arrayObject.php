<?php

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

$ageObj = new ArrayObject($age);

// var_dump($ageObj);

// object(ArrayObject)#1 (1) {
//     ["storage":"ArrayObject":private]=>
//     array(3) {
//       ["Peter"]=>
//       string(2) "35"
//       ["Ben"]=>
//       string(2) "37"
//       ["Joe"]=>
//       string(2) "43"
//     }
//   }

// $ageObj->setFlags(ArrayObject::STD_PROP_LIST);

// var_dump($ageObj);

$ageObj->ksort();

foreach ($ageObj as $key => $val) {
    // echo "$key = $val \n";
};

// Ben = 37 
// Joe = 43 
// Peter = 35 

// echo $ageObj->count(); // 3


$a = new ArrayObject([], ArrayObject::STD_PROP_LIST);
$a['arr'] = 'Array data';
$a->prop = 'Prop data';

var_dump($a['arr']);
$b = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
$b['arr'] = 'Array data';
$b->prop = 'Prop data';

$c = new ArrayObject([]);
$c['arr'] = 'Array data';
$c->prop = 'Prop data';

var_dump($c->arr);

print_r($a);
/* Output

ArrayObject Object
(
    [prop] => Prop data
    [storage:ArrayObject:private] => Array
        (
            [arr] => Array data
        )

)*/

print_r($b);
/* Output

ArrayObject Object
(
    [storage:ArrayObject:private] => Array
        (
            [arr] => Array data
            [prop] => Prop data
        )

)*/

print_r($c);
