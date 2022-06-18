<?php

/**
 * how to use same method from multiple trait
 */
trait hello
{
    public function sayhello()
    {
        echo "Hello from Hello Trait.\n";
    }
}

trait hi
{
    public function sayhello()
    {
        echo "Hello from Hi Trait.\n";
    }
}

class base
{
    use hello, hi {
        hello::sayhello insteadof hi;
        hi::sayhello as newhello;
    }
}

$test = new base();

$test->sayhello();
$test->newhello();

//_______________________________________________________________________________

/**
 * How to use private method from trait
 */

trait welcome
{
    private function sayhello()
    {
        echo "Hello from welcome Trait.\n";
    }
}

class Anotherbase
{
    use welcome {
        welcome::sayhello as public newhello;
    }
}

$test = new Anotherbase();

$test->newhello();
