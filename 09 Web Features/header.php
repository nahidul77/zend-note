<?php

/**
 * Second header will not replace first one.
 */
// header('Location: youtube.com');
// header('Location: facebook.com', false); 


/**
 * this header will change status code
 */
// header('Location: facebook.com', false, 404);


//_________________header_list_______________

// setcookie("TestCookie", "SomeValue");
// header("X-Sample-Test: foo");
// header("Content-type: text/plain");

// var_dump(headers_list());


//output:

// array(4)
// {
// [0]=> string(23) "X-Powered-By: PHP/7.1.1"
// [1]=> string(19) "Set-Cookie: TestCookie=SomeValue"
// [2]=> string(18) "X-Sample-Test: foo"
// [3]=> string(24) "Content-type: text/plain"
// }



//___________header_remove_______________________

/**
 * The header_remove() function removes an HTTP header previously set with the header() function.
 */

// header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
// header("Cache-Control: no-cache");
// header("Pragma: no-cache");

// header_remove("Pragma");


//__________header_sent______________________

//The headers_sent() function checks if/where headers have been sent.


// if (!headers_sent()) {
//     header("Location: https://www.w3schools.com/");
//     exit;
// }  