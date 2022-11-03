<?php

#01_________________________

// What is the output of the following code?

// echo "22" + "0.2", 23 . 1;

#02______________________

// What can prevent PHP from being able to open a file on the hard drive (Choose 2)?


// File system permissions

// File is outside of open_basedir

// File is inside the /tmp directory.

// PHP is running in CGI mode.


#03___________________

// What is "instanceof" an example of?

// a boolean

// an operator

// a function

// a language construct

// a class magic


#04_____________________

// What is the output of the following code?

// $a = 'a'; $b = 'b';

// echo isset($c) ? $a.$b.$c : ($c = 'c').'d';

// abc

// cd

// 0d



#05_______________________


// What function allows resizing of PHP's file write buffer?

// ob_start()

// set_write_buffer()

// stream_set_write_buffer()

// Change the output_buffering INI setting via ini_set() function


#06______________________

// What does the __FILE__ constant contain?


// The filename of the current script.

// The full path to the current script.

// The URL of the request made.

// The path to the main script.


#07____________________

// What is the output of the following code?
// class Base {

// protected static function whoami() {

// echo "Base ";

// }

// public static function whoareyou() {

// static::whoami();

// }

// }

// class A extends Base {

// public static function test() {

// Base::whoareyou();

// self::whoareyou();

// parent::whoareyou();

// A::whoareyou();

// static::whoareyou();

// }

// public static function whoami() {

// echo "A ";

// }

// }

// class B extends A {

// public static function whoami() {

// echo "B ";

// }

// }

// B::test();


#08_________________________

// Late static binding is used in PHP to:


// Load dynamic libraries and extensions at runtime

// Use caller class information provided in static method call

// Resolve undefined class names by automatically including needed files

// Find proper method to call according to the call arguments


#09__________________________

// Which of the following is used to find all PHP files under a certain directory?


// PHPIterator

// RecursiveTreeIterator

// RecursiveDirectoryIterator

// SplTempFileObject


#10_____________________________

// Given a PHP value, which sample shows how to convert the value to JSON?


// $string = json_encode($value);

// $string = Json::encode($value);

// $json = new Json($value); $string = $json->__toString();

// $value = (object) $value; $string = $value->__toJson();


#11___________________________

// Assuming UTF-8 encoding, what is the value of $count?

// $data = '$1Ä2';

// $count = strlen($data);


#12______________________

// What will the following code print out?

// $str = '&#10004; one of the following';

// echo str_replace('&#10004;', 'Check', $str);


#13___________________

// What types of HTTP authentication are supported by PHP? (Choose 2)


// Basic

// Advanced

// Strict

// Digest

// Realm

#14_________________________

// What will the following function call print?

// printf('%010.6f', 22);

// 22

// 22.00

// 022.000000

// 22.000000

#15_______________________

// Which options do you have in PHP to set the expiry date of a session?


// Set the session.duration directive in php.ini

// Set session cookie expiry date locally via session_set_cookie_params()

// Set session expiry date locally via session_cache_expire()

// None of the above



#16_________________________

// When uploading a file to a PHP script using the HTTP PUT method, where would the file data be found?


// the $_FILES super-global

// the input stream php://input

// the $_POST super-global

// the global variable scope


#17_____________________

// set_error_handler(?callable $callback, int $error_levels = E_ALL): ?callable
// set_error_handler(errorhandler, E_ALL | E_STRICT)


#18_____________________

// Which of these databases is NOT supported by a PDO driver?

// Microsoft SQL Server

// SQLite

// Microsoft Access

// Berkeley DB


#19_____________________

// When a class is defined as final it:

// Can no longer be extended by other classes.

// Means methods in the class are not over-loadable.

// Cannot be defined as such, final is only applicable to object methods.

// Cannot be instantiated.


#20_____________________

// Which of the following filtering techniques prevents all cross-site scripting (XSS) vulnerabilities?

// Strip all occurrences of the string <script .

// Strip all occurrences of the string javascript .

// Enable magic_quotes_gpc .

// None of the above.

#21_____________________

// Which function can NOT help prevent cross-site scripting? (Choose 2)


// addslashes()

// htmlentities()

// htmlspecialchars()

// strip_tags()

// quotemeta()


#22_____________________

// Which constant must be passed as the second argument to htmlentities() to convert single quotes (') to HTML entities?

// TRUE

// FALSE

// ENT_QUOTES

// ENT_NOQUOTES

// ENT_COMPAT


#23_____________________

// Your public web application needs to provide access to binary files for registered users only. How would you achieve this?

// Host the files on a public external file sharing service.

// Redirect to the file which resides in the server's document root

// Use PHP to send the file to the client, using the header() function to set appropriate HTTP headers

// PHP is used for service HTML content, not binary content

#24_____________________

// Which of the following can NOT be used to send a cookie from within a PHP application?

// header()

// $_COOKIE

// setcookie()

// setrawcookie()

#25_____________________

// Which of the following is NOT a valid function declaration?

// function x ($x1 = array())

// function x (A $x1)

// function x (A $x1 = null)

// function x ($x1 = $x2)

#26_____________________

// Which of the following is true about stream contexts? (Choose 2)


// A context can modify or enhance the behavior of a stream

// A context indicates what session the stream is part of

// A context is a set of parameters and stream wrapper specific options

// Contexts are created with new Stream_Context();

#27_____________________

// Which technique should be used to speed up joins without changing their results?

// Add indices on joined columns

// Add a WHERE clause

// Add a LIMIT clause

// Use an inner join


#28_____________________

// Which of the following rules must every correct XML document adhere to? (Choose 2)


// It has to be well-formed.

// It has to be valid.

// It has to be associated to a DTD.

// It may only contain UTF-8 encoded characters.


#29_____________________

// What is the output of the following code?

// $a = 3;

// switch ($a) {

// case 1: echo 'one'; break;

// case 2: echo 'two'; break;

// default: echo 'four'; break;

// case 3: echo 'three'; break;

// }


// one

// two

// three

// four

#30_____________________

// What parsing methodology is utilized by the SimpleXML extension?

// SAX

// DOM

// XPath

// Push/Pull Approach

// Expat


#31_____________________

// Which of the following are valid identifiers? (Choose 3)


// function 4You() { }

// function _4You() { }

// function object() { }

// $1 = "Hello";

// $_1 = "Hello World";


#32_____________________

// What is the result of the following bitwise operation in PHP?

// 1 ^ 2

#33_____________________

// What is the output of the following code?

// $first = "second";

// $second = "first";

// echo $$$first;

// Choose the correct option from the given list.

// "first"

// "second"

// an empty string

// an error


#34_____________________

// Which of the following code snippets DO NOT write the exact content of the file "source.txt" to "target.txt"? (Choose 2)

// Choose all the correct options from the given list.

// file_put_contents("target.txt", fopen("source.txt", "r"));

// file_put_contents("target.txt", readfile("source.txt"));

// file_put_contents("target.txt", join(file("source.txt"), "\n"));

// file_put_contents("target.txt", file_get_contents("source.txt"));

// $handle = fopen("target.txt", "w+"); fwrite($handle, file_get_contents("source.txt"));

// fclose($handle);


#35_____________________

// Consider the following two files. When you run test.php, what would the output look like?
// test.php:

// include "MyString.php";

// print ",";

// print strlen("Hello world!");

// MyString.php:

// namespace MyFramework\String;

// function strlen($str)

// {

// return \strlen($str)*2; // return double the string length

// }

// print strlen("Hello world!")

// Choose the correct option from the given list.

// 12,12

// 12,24

// 24,12

// 24,24

// PHP Fatal error: Cannot redeclare strlen()

#36_____________________

// What is the output of the following code?

// $f = function () { return "hello"; };

// echo gettype($f);

// Choose the correct option from the given list.

// hello

// string

// object

// function


#37_____________________

// What is the output of the following code?

// class C {

// public $x = 1;

// function __construct() { ++$this->x; }

// function __invoke() { return ++$this->x; }

// function __toString() { return (string) --$this->x; }

// }

// $obj = new C();

// echo $obj();

// Choose the correct option from the given list.

// 0

// 1

// 2

// 3


#38_____________________

// What is the output of the following code?

// class Test {

// public function __call($name, $args)

// {

// call_user_func_array(array('static', "test$name"), $args);

// }

// public function testS($l) {

// echo "$l,";

// }

// }

// class Test2 extends Test {

// public function testS($l) {

// echo "$l,$l,";

// }

// }

// $test = new Test2();

// $test->S('A');

// Choose the correct option from the given list.

// A,

// A,A,

// A,A,A,

// PHP Warning: call_user_func_array() expects parameter 1 to be a valid callback

#39_____________________

// SimpleXML provides the ability to iterate over items in an XML document, as well as access items within it as if they were object properties. When creating your own classes to access data, implementing which of the following would NOT achieve this goal?

// Choose the correct option from the given list.

// __toString

// Iterator

// __get/__set

// ArrayAccess

#40_____________________

// Consider the following table data and PHP code. What is the outcome?

// Table data (table name "users" with primary key "id"):

// id name email

// ------- ----------- -------------------

// 1 anna alpha@example.com

// 2 betty beta@example.org

// 3 clara gamma@example.net

// 5 sue sigma@example.info

// PHP code (assume the PDO connection is correctly established):

// $dsn = 'mysql:host=localhost;dbname=exam';

// $user = 'username';

// $pass = '********';

// $pdo = new PDO($dsn, $user, $pass);

// try {

// $cmd = "INSERT INTO users (id, name, email) VALUES (:id, :name, :email)";

// $stmt = $pdo->prepare($cmd);

// $stmt->bindValue('id', 1);

// $stmt->bindValue('name', 'anna');

// $stmt->bindValue('email', 'alpha@example.com');

// $stmt->execute();

// echo "Success!";

// } catch (PDOException $e) {

// echo "Failure!";

// throw $e;

// }

// Choose the correct option from the given list.

// The INSERT will succeed and the user will see the "Success!" message.

// The INSERT will fail because of a primary key violation, and the user will see the "Success!"

// message.

// The INSERT will fail because of a primary key violation, and the user will see a PDO warning

// message.

// The INSERT will fail because of a primary key violation, and the user will see the "Failure!"

// message.


#41_________________________

// What is the output of the following code?

// class Foo Implements ArrayAccess {

// function offsetExists($k) { return true;}

// function offsetGet($k) {return 'a';}

// function offsetSet($k, $v) {}

// function offsetUnset($k) {}

// }

// $x = new Foo();

// echo array_key_exists('foo', $x)?'true':'false';

#42_________________________

// What is the output of this code?

// $world = 'world';

// echo <<<'TEXT'

// hello $world

//     TEXT;

// Choose the correct option from the given list.

// hello world

// hello $world

// PHP Parser error

#43_________________________

// What is the output of the following code?

// class Bar {

// private $a = 'b';

// public $c = 'd';

// }

// $x = (array) new Bar();

// echo array_key_exists('a', $x) ? 'true' : 'false';

// echo '-';

// echo array_key_exists('c', $x) ? 'true' : 'false';

// Choose the correct option from the given list.

// false-false

// false-true

// true-false

// true-true

#44_________________________

// What is the output of the following code?

// $a = array('a', 'b'=>'c');

// echo property_exists((object) $a, 'a')?'true':'false';

// echo '-';

// echo property_exists((object) $a, 'b')?'true':'false';

// Choose the correct option from the given list.

// false-false

// false-true

// true-false

// true-true


#45_________________________

// What will the $array array contain at the end of this script?

// function modifyArray (&$array)

// {

// foreach ($array as &$value)

// {

// $value = $value + 1;

// }

// $value = $value + 2;

// }

// $array = array (1, 2, 3);

// modifyArray($array);

// Choose the correct option from the given list.

// 2, 3, 4

// 2, 3, 6

// 4, 5, 6

// 1, 2, 3


#46_________________________

// Which of the following statements about anonymous functions in PHP are NOT true? (Choose 2)

// Choose all the correct options from the given list.

// Anonymous functions can be bound to objects

// Anonymous functions created within object context are always bound to that object

// Assigning closure to a property of an object binds it to that object

// Methods bind() and bindTo() of the Closure object provide means to create closures with different binding and scope

// Binding defines the value of $this and the scope for a closure


#47_________________________

// What will be the result of the following operation?

// $a = array_merge([1,2,3] + [4=>1,5,6]);

// echo $a[2];

#48_________________________

// Is the following code vulnerable to SQL Injection ($mysqli is an instance of the MySQLi class)?

// $age = $mysqli->real_escape_string($_GET['age']);

// $name = $mysqli->real_escape_string($_GET['name']);

// $query = "SELECT * FROM `table` WHERE name LIKE '$name' AND age = $age";

// $results = $mysqli->query($query);

// Choose the correct option from the given list.

// No, the code is fully protected from SQL Injection.

// Yes, because the $name variable is improperly escaped.

// Yes, because the $name variable and the $age variable is improperly escaped.

// Yes, because the $age variable is improperly escaped.

// Yes, because you cannot prevent SQL Injection when using MySQLi


#49_________________________

// What is the name of the header used to require HTTP authentication?

// Choose the correct option from the given list.

// Authorization-Required

// WWW-Authenticate

// HTTP-Authenticate

// Authentication-Required

// HTTP-Auth


#50_________________________

// Which of the following functions are used to escape data within the context of HTML? (Choose 2)

// Choose all the correct options from the given list.

// htmlentities()

// addslashes()

// stripslashes()

// strip_tags()

// htmlspecialchars()


#51_________________________

// The constructs for(), foreach(), and each() can all be used to iterate an object if the object...

// Choose the correct option from the given list.

// implements ArrayAccess

// implements Iterator

// implements Iterator and ArrayAccess

// None of the above

#52_________________________

// You work for a shared hosting provider, and your supervisor asks you to disable user scripts to dynamically load PHP extensions using the dl() function. How can you do this? (Choose 2)

// Choose all the correct options from the given list.

// Set enable_dl to Off in the server's php.ini configuration file.

// Add dl to the current value of disable_functions in the server's php.ini configuration file.

// Add dl to the current value of disable_classes in the server's php.ini configuration file.

// Write a custom function called dl() , save it under the name prepend.inc and then set the auto_prepend_file directive to prepend.inc in php.ini.

#53_________________________

// One common security risk is exposing error messages directly in the browser. Which PHP configuration directive can be disabled to prevent this?

// Choose the correct option from the given list.

// html_display

// error_reporting

// display_errors

// error_log

// ignore_repeated_errors


#54_________________________

// How can the id attribute of the 2nd baz element from the XML string below be retrieved from the SimpleXML object found inside $xml?

// <?xml version='1.0' >

// <foo>

// <bar>

// <baz id="1">One</baz>

// <baz id="2">Two</baz>

// </bar>

// </foo>

// Choose the correct option from the given list.

// $xml->getElementById('2');

// $xml->foo->bar->baz[2]['id']

// $xml->foo->baz[2]['id']

// $xml->foo->bar->baz[1]['id']

// $xml->bar->baz[1]['id']


#55_________________________

// What will be the output value of the following code?

// $array = array(1,2,3);

// while (list(,$v) = each($array));

// var_dump(current($array));

// Choose the correct option from the given list.
// bool(false)

// int(3)

// int(1)

// NULL

// Array


#56_________________________

// What is the length of a string returned by: md5(rand(), TRUE);

// Choose the correct option from the given list.

// Depends on the value returned by rand() function

// 32

// 24

// 16

// 64

#57_________________________

// Which string will be returned by the following function call?

// $test = '/etc/conf.d/wireless';

// substr($test, strrpos($test, '/')); // note that strrpos() is being called, and not strpos()

// Choose the correct option from the given list.
// ""

// "/wireless"

// "wireless"

// "/conf.d/wireless"

// "/etc"

#58_________________________

// The following form is loaded in a browser and submitted, with the checkbox activated:

//     <form method="post">

//     <input type="checkbox" name="accept" />

//     </form>

//     In the server-side PHP code to deal with the form data, what is the value of $_POST['accept'] ?

//     Choose the correct option from the given list.
//     accept

//     ok

//     true

//     on


#59_________________________

// The following form is loaded in a recent browser and submitted, with the second select option selected:
//     <form method="post">

//     <select name="list">

//     <option>one</option>

//     <option>two</option>

//     <option>three</option>

//     </select>

//     </form>

//     In the server-side PHP code to deal with the form data, what is the value of $_POST['list'] ?

//     Choose the correct option from the given list.
//     1

//     2

//     two

//     null

#60_________________________

// What is the output of the following code?

// $str = 'Good Luck!';

// var_dump(substr($str, 10));

// A. string(0) ""
// B. bool(false)
// C. string(1) "!"
// D. string(2) "k!"

#61_________________________

// Consider 3 PHP files that are called asynchronously via XmlHttpRequest:

// Which of the following statements is true? (Choose two.)
// A. The total execution time for all 3 requests will be the maximum of the longest sleep() call
// B. The requests may be processed out of order
// C. The requests are guaranteed to be executed in order
// D. Concurrent requests will be blocked until the session lock is released

#62_________________________

// What is the output of the following code?

// class Test {
//     public $var 1;
// }

// function addMe(Test $t){
//     $t->var++;
// }


// $t = new Test();
// addMe($t);
// echo $t->var;

// A. 1
// B. 2
// C. null

#63_________________________

// $arr = [1, 2, 3] + [4, 5, 6, 7];

// echo implode(',', $arr);

// 1,2,3,7

#64________________________

// Difference between get and post for preference

// post automatically encrypt data
// post support large data transfer 


#65___________________________

// parse_str

#66________________________

// $_FILES["name"]["tmp_name"] as provisional name after upload a file


#67__________________

// Difference between ?? and ?:

// combine with isset ??

// combine with isset ?

// support 7.2 onward

#68______________________

// Throwable , Error, Exception, ErrorException (finding the base interface)

#69______________________
// declare(strict_types=1);
// try {
//     f(); //i forgot the code, but its produce error because of strict_types declare.
// } catch (Exception $e) {
//     echo 'exception';
// } catch (Error $e) {
//     echo 'Error';
// }

#70_____________________

// function add(int $a, int $b): float
// {
//     return $a + $b;
// }

// var_dump(add(10.6, 9.4));

#71________________________

// http status code like 3xx, 4xx or 5xx

#72__________________________

// closeCursor()
