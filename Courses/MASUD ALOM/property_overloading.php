<?php

/**
 * Property overloading = __get(), __set(), __isset(), __unset
 */


class PropertyLoading
{
    private $data = [];

    public function __set($propertyName, $propertyValue)
    {

        $this->data[$propertyName] = $propertyValue;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        } else {
            return "Property not found";
        }
    }

    public function __isset($name)
    {
        echo isset($this->data[$name]) ? "Property Set" : "Property No Set";
    }

    public function __unset($name)
    {
    }
}

$obj = new PropertyLoading;

// $obj->name = "Masud Alam";
// $obj->age = 38;

// echo $obj->age; // 38
// echo $obj->test; // Property not found;

echo isset($obj->address); //Property No Set
// echo unset($obj->address); //Property No Set
