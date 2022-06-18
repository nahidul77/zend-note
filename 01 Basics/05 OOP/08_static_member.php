<?php
# we can use static member and method without creating object.


class greeting
{
    public static function welcome()
    {
        echo "Hello World!";
    }
}

// Call static method
greeting::welcome();


//_______________________________________________________

class greeting
{
    public static function welcome()
    {
        echo "Hello World!";
    }

    public function __construct()
    {
        self::welcome();
    }
}

new greeting();

//______________________________________________________________

class Aclass
{
    public static function welcome()
    {
        echo "Hello World!";
    }
}

class SomeOtherClass
{
    public function message()
    {
        Aclass::welcome();
    }
}

//________________________________________________________________

class domain
{
    protected static function getWebsiteName()
    {
        return "W3Schools.com";
    }
}

class domainW3 extends domain
{
    public $websiteName;
    public function __construct()
    {
        $this->websiteName = parent::getWebsiteName();
    }
}

$domainW3 = new domainW3;
echo $domainW3->websiteName;

//__________________________________________________________________

class base
{

    public static $name = "Yahoo Baba";
}

class derived extends base
{
    public static function show()
    {
        echo parent::$name;
    }
}

$test = new derived();

$test->show();
