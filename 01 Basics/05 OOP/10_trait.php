<?php

trait hello
{
    public function sayhello()
    {
        echo "Hello everyone\n";
    }
    public function sayhi()
    {
        echo "Hi everyone\n";
    }
}

trait bye
{
    public function saybye()
    {
        echo "Bye Bye everyone\n";
    }
}

class base
{
    use hello, bye;
}

class base2
{
    use hello;
}

$test = new base();

$test->sayhello();
$test->sayhi();
$test->saybye();
