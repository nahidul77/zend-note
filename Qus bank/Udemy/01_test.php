<?php

/**
 * Test 01
 */

# Q1

// One common security risk is exposing error messages directly in the browser. (display_errors) PHP configuration directive can be disabled to prevent this.

//_________________________________________________
# Q2

// function append($str)
// {
//     $str = $str . 'append';
// }
// function prepend(&$str)
// {
//     $str = 'prepend' . $str;
// }
// $string = 'zce';

// append(prepend($string));

// echo $string; output: prependzce

//____________________________________________________

# Q3

# Which of the following functions are used to escape data within the context of HTML?

/**
 * The only difference between these function is that htmlspecialchars() function convert the special characters to HTML entities whereas htmlentities() function convert all applicable characters to HTML entities.
 * 
 *  Escaping is the process of securing output by stripping out unwanted data, like malformed HTML or script tags, preventing this data from being seen as code.
 */

# these are: 

// $str = "This is some <b>bold</b> text.";

// echo htmlspecialchars($str); //output: This is some &lt;b&gt;bold&lt;/b&gt; text.
// echo htmlentities($str); //output: This is some &lt;b&gt;bold&lt;/b&gt; text.

# these are not:

// echo strip_tags("Hello <b><i>world!</i></b>", "<b>"); //output: Hello <b>world!</b>

/**
 * predefined characters are:

single quote (')
double quote (")
backslash (\)
NULL
 */
// echo addslashes('What \does "yolo" mean?'); // output: What \\does \"yolo\" mean?

// echo stripslashes('What \does \"yolo\" mean?'); // output: What does "yolo" mean?

//___________________________________________

# Q4

# What can prevent PHP from being able to open a file on the hard drive?

// 1. File system permissions

// 2. File is outside of open_basedir

/**
 * The open_basedir directive is specified in the PHP configuration file (php.ini) and sets the directories that PHP can access. Access refers to any actions with files: opening (for example, fopen() or gzopen()), writing and executing. If the open_basedir directive is set and an attempt is made to run a file that is outside the listed directories, the script will not run and will generate an warning error.
 * 
 * open_basedir = /srv/http/:/etc/webapps/:/usr/share/webapps/:/tmp/:/home/mial/
 * 
 * By default, if the open_basedir value is not set, file operations are allowed in any directories on the computer (for which there are sufficient file permissions).

 */

// 3. File is owned by another user and safe_mode (safe mode is a diagnostic mode or repair mode) is enabled.

//______________________________________________________

# Q6

/**
 * PDOStatement :: bindColumn - PHP bind one to one variable
 * 
 * bool PDOStatement::bindColumn ( mixed $column , mixed &$param [, int $type [, int $maxlen [, mixed $driverdata ]]] )
 * 
 * PDO :: FETCH_BOUND (integer)
 * 
 * Obtaining specified, returns TRUE and the value assigned to the columns in the result set by PDOStatement :: bindParam () or PDOStatement :: bindColumn () PHP variable method bindings.
 */

//_____________________________________________________

# Q9

/**
 * hash_pbkdf29()
 * 
 * $algo: It is the required parameter which specifies the selected hashing algorithm (like- “md5”, “sha256”, “sha1”).
$pass: This parameter is used to specify the password to use for the derivation.
$salt: This parameter is used for the derivation and the value should be generated randomly.
$itr: This parameter count the number of internal iterations.
$len: This parameter is used to hold the length of the output string.
$raw_opt: If this parameter set to True then its output will be raw binary data and if this parameter set to false then output will be lowercase hexits
 */


// $gfg = "Contribute1234";
// $iterations = 100;

// // Generate a random IV using 
// // openssl_random_pseudo_bytes()
// // random_bytes() or another 
// // suitable source of randomness.
// $salt = random_bytes(8);

// // Using hash_pbkdf2 function
// $hash = hash_pbkdf2(
//     "md5",
//     $gfg,
//     $salt,
//     $iterations,
//     20,
//     false
// );

// // Display result
// echo $hash; //4c3c46265c520c62b232


# crypt(str,salt)