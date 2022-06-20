<?php
trait MyTrait
{
    public function MyMethod()
    {
        return __TRAIT__;
    }
}

if (trait_exists('MyTrait')) {
    //echo "This trait is exist.";
    class MyClass
    {
        use MyTrait;
    }
} else {
    echo "This trait is not exist.";
}
