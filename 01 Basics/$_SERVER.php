<?php
// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';


// PHP তে কেন এবং কিভাবে আমি $_SERVER Superglobal Variable টি ব্যবহার করব?
// PHP Super Global Variable

// মূলত PHP ভিত্তিক সার্ভার এর headers, path, Server name, Server software, Server protocol, IP address এর মতো বিভিন্ন তথ্য জানার জন্য আমরা $_SERVER superglobals variable টি ব্যবহার করব। আর এর জন্য $_SERVER এর কিছু free defined array property আছে , যা দিয়ে আমরা খুব সহজে সার্ভার এর প্রয়োজনীয় তথ্য পেতে পারি। নিচের উদাহরণ থেকে দেখা যাক

echo $_SERVER['SERVER_NAME']; //localhost


// ব্যাখ্যা :উপরের PHP Script টি আপনার host এর নাম দেখাবে।

// চলুন $_SERVER এর কিছু গুরুত্বপূর্ণ property নিয়ে আলোচনা করি :
// ‘PHP_SELF’:
// PHP_SELF Property টি আপনার current script এর Document Root এর পরের file path দেখাবে। অর্থাৎ : আপনার PHP Script টির Path যদি http://localhost/test/self.php হয়। PHP_SELF আপনাকে test/self.php Path টুকু দেখাবে।

echo $_SERVER['PHP_SELF'];  //Output:test/self.php


// ‘GATEWAY_INTERFACE’
// Server এর CGI Version নম্বর দেখাবে।

echo $_SERVER['GATEWAY_INTERFACE'];  //Output:CGI/1.1


// ‘SERVER_ADDR’
// Script এর Host Server এর IP address রিটার্ন করবে।

echo $_SERVER['SERVER_ADDR'];  //Output: ::1


// ‘SERVER_NAME’
// Host Server এর নাম রিটার্ন করবে।

echo $_SERVER['SERVER_NAME'];  //Output: localhost

// ‘SERVER_SOFTWARE’
// Host Server এ যেসব সফটওয়্যার Install আছে সেগুলোর নাম এবং তাদের ভার্সন দেখাবে।


echo $_SERVER['SERVER_SOFTWARE'];  //Output: Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.6


// ‘SERVER_PROTOCOL’
// Host Server এ ব্যবহৃত protocol এর নাম এবং ভার্সন দেখাবে।

echo $_SERVER['SERVER_PROTOCOL'];  //Output: HTTP/1.1


// ‘REQUEST_METHOD’
// Form এর কোন Method এ Server এ Request পাঠানো হয়েছে সেই Request Method এর নাম Return করবে। ‘REQUEST_METHOD’বোঝার জন্য আমরা নিম্নের দুইটি উদাহরণ দেখবো

// প্রথমে নিম্নের Code দিয়ে request.php file টি তৈরী করুন :

?>
<!DOCTYPE html>
<html>

<head>
    <title>Test Request</title>
</head>

<body>
    <form method="post" action="server.php">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>

<?php

//এখন Server এ একই ফোল্ডার এ নিম্নের Code দিয়ে server.php file টি তৈরী করুন :


echo $_SERVER['REQUEST_METHOD'];

// এখন request.php file টি submit করলে ফলাফল হিসাবে “POST” পাবেন।
// কারণ আপনার FORM এর “method=post” দেওয়া আছে।



// ‘REQUEST_TIME’
// Server এর Request time timestamp এ রিটার্ন করবে


echo $_SERVER['REQUEST_TIME'];  //Output: 1506866477

// ‘QUERY_STRING’
// Form এর get Method এ অথবা URL এর মাধ্যমে পাঠানো Data কে Query String হিসাবে Return করবে। ‘QUERY_STRING’বোঝার জন্য আমরা নিম্নের দুইটি উদাহরণ দেখবো

// প্রথমে নিম্নের Code দিয়ে query_string.php file টি তৈরী করুন :

?>


<!DOCTYPE html>
<html>

<head>
    <title>Test Query String</title>
</head>

<body>
    <form method="get" action="server.php">
        Name:<input type="text" name="name" value="Masud Alam">&nbsp;&nbsp;Age:
        <input type="number" name="age" value="35">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>

<?php

// এখন Server এ একই ফোল্ডার এ নিম্নের Code দিয়ে server.php file টি তৈরী করুন :


echo $_SERVER['QUERY_STRING'];


// এখন query_string.php file টি submit করলে ফলাফল হিসাবে
// “name=Masud+Alam&age=35&submit=Submit” পাবেন।



// ‘DOCUMENT_ROOT’
// সার্ভার বা current script এর root ফোল্ডার এর path দেখাবে।


echo $_SERVER['DOCUMENT_ROOT'];  //Output: C:/xampp/htdocs 
//(depend on your server root address")

// ‘HTTP_ACCEPT’
// current script এ যেইসব header accept করে তা রিটার্ন করবে।


echo $_SERVER['HTTP_ACCEPT'];
//Output: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8


// ‘HTTP_ACCEPT_ENCODING’
// current script এ যেইসব encoding support করবে তা রিটার্ন করবে। যেমন :gzip, deflate, br ইত্যাদি।

echo $_SERVER['HTTP_ACCEPT_ENCODING'];  //Output: gzip, deflate, br


// ‘HTTP_ACCEPT_LANGUAGE’
// current script এ যেইসব Language support করবে তা রিটার্ন করবে। যেমন :en-US,en;q=0.8 ইত্যাদি।

echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];  //Output: en-US,en;q=0.8


// ‘HTTP_CONNECTION’
// সার্ভারের http Connection Status দেখাবে। যেমন : keep-alive

echo $_SERVER['HTTP_CONNECTION'];  //Output:keep-alive


// ‘HTTP_HOST’
// সার্ভারের Host নাম return করবে যেমন : localhost, www.example.com ইত্যাদি।

echo $_SERVER['HTTP_HOST'];  //Output:localhost

// ‘HTTP_REFERER’
// বর্তমান পেজের সম্পূর্ণ URL রিটার্ন করবে। যেমন :http://www.example.com/category/test.php

echo $_SERVER['HTTP_REFERER'];  //Output:localhost/test/request.php

// ‘HTTP_USER_AGENT’
// আপনার সার্ভারের User agent list অর্থাৎ আপনার Operating System এর নাম এবং ব্রাউজার গুলোর নাম দেখাবে। যেগুলো সার্ভারের জন্য User হিসাবে ব্যবহৃত হয়।

echo $_SERVER['HTTP_USER_AGENT'];
//Output:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36

// ‘HTTPS’
// আপনার সার্ভারে আসা Current URL টি secure HTTP protocol কিনা তা চেক করবে।


echo $_SERVER['HTTPS'];  //Output:on (if your url is https)


// ‘REMOTE_ADDR’
// ব্যবহারকারীর IP Address রিটার্ন করবে।

echo $_SERVER['REMOTE_ADDR'];  //Output:192.168.10.23 as like



// ‘REMOTE_HOST’
// ব্যবহারকারীর কম্পিউটার নাম রিটার্ন করবে।

// ‘REMOTE_PORT’
// ব্যবহারকারীর কম্পিউটার Port Number রিটার্ন করবে।

echo $_SERVER['REMOTE_PORT'];  //Output:59263 (sample)


// ‘SCRIPT_FILENAME’
// বর্তমান script এর সম্পূর্ণ Path রিটার্ন করবে। যেমন :C:/xampp/htdocs/test/test.php


echo $_SERVER['SCRIPT_FILENAME'];  //Output:C:/xampp/htdocs/test/test.php


// ‘SERVER_ADMIN’
// Web Server Configuration file এ দেওয়া Server Admin এর নাম রিটার্ন করবে।


echo $_SERVER['SERVER_ADMIN'];  //Output:postmaster@localhost


// ‘SERVER_PORT’
// Web Server এর Port Number রিটার্ন করবে।


echo $_SERVER['SERVER_PORT'];  //Output:80 (sample)


// ‘SERVER_SIGNATURE’
// সার্ভারের বিস্তারিত যেমন : Server ভার্সন, OpenSSL ভার্সন , PHP ভার্সন , Host এর নাম এবং Server Port number রিটার্ন করবে।


echo $_SERVER['SERVER_SIGNATURE'];
//Output:Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.6 Server at localhost Port 80

// ‘SCRIPT_NAME’
// চলতি script এর path রিটার্ন করবে।


echo $_SERVER['SCRIPT_NAME'];  //Output:/test/server.php (sample)

// ‘REQUEST_URI’
// চলতি Page এর URI রিটার্ন করবে।


echo $_SERVER['REQUEST_URI'];  //Output:/test/server.php?name=Masud+Alam&age=34&submit=Submit

// ‘PHP_AUTH_DIGEST’
// ক্লায়েন্ট থেকে আসা encrypted authorization header কে Variable এ Set করার জন্য ব্যবহৃত হয়।

// ‘PHP_AUTH_USER’ and ‘PHP_AUTH_PW’
// HTTP authentication এর সময় এই দুটি superglobal Variable এর মাধ্যমে User প্রদত্ত username এবং password সেট করা যায়। নিচের উদাহরণ run করলেই আরো ভালোভাবে বুঝা যাবে।
// Note:এখানে username=admin এবং password=123456 ব্যবহার করা হয়েছে।


$authenticate = false;
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
    $name = $_SERVER['PHP_AUTH_USER'];
    $pass = $_SERVER['PHP_AUTH_PW'];
    if ($name == 'admin' && $pass == '123456') {
        $authenticate = true;
    }
}

if ($authenticate == false) {
    header('WWW-Authenticate: Basic realm="Restricted Page Enter Details To Continue"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Authentication Failed Refresh To Do It Again";
} else {
?>
    <html>

    <body>
        <h1>Simple HTTP Authentication Using PHP To Make Your Site More Secure</h1>
        <p>All Your Content Comes Here</p>
    </body>

    </html>
<?php
}
?>
<!-- ‘AUTH_TYPE’
HTTP authentication এর সময় authentication type set করার জন্য ব্যবহৃত হয়। -->