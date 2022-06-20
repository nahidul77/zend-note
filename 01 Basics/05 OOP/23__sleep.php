<?php

/**
 * Serialization = state of object to byte stream (string representation)
 * when we save it to byte stream we can save it to any file and transmit to through any network
 * 
 * Deserialization = byte stream to object again
 * 
 * Applied it to Arrays and objects, functions are:
 * 
 * serialize() = Array / object to byte stream
 * unserialize() = byte stream to Array / object
 * 
 * json_encode() = Array to json
 * json_decode() = json to array
 * 
 * __sleep() method called when serialize method called for object.
 */

class student
{

    public $course = "PHP";
    private $first_name;
    private $last_name;

    public function setName($fname, $lname)
    {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __sleep()
    {
        return array('first_name', 'last_name');
    }
}

$obj = new student();

$obj->setName("Nahidul", "Islam");

$srl = serialize($obj);

echo $srl;
