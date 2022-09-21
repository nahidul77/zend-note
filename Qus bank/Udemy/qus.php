<?php

/**
 * Array Access

$object = new stdClass;
Finally, more modern versions of php include a shortcut for creating stdClass objects

$object = {};
 */

// class Foo implements ArrayAccess
// {
//     protected $_data = array();
//     public function offsetExists($offset)
//     {
//         return array_key_exists($offset, $this->_data);
//     }

//     public function offsetGet($offset)
//     {
//         return $this->_data[$offset];
//     }

//     public function offsetSet($offset, $value)
//     {
//         $this->_data[$offset] = $value;
//     }

//     public function offsetUnset($offset)
//     {
//         unset($this->_data[$offset]);
//     }
// }

// $object = new Foo;
// $object['foo'] = 'bar';
// $bar = $object['foo'];

// echo "The value we fetched: " . $bar, "\n";

//Output : The value we fetched: bar
