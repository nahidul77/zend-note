<?php

$filepath = __DIR__ . '/assets/us_presidents.csv';

$data = '';

$handle = fopen($filepath, 'r');
if($handle) {

  while(!feof($handle)) { //f end of file
    // append, examine, parse, etc.
    $row = fgets($handle); // next line
    $array = explode(',', $row);
    echo $array[1] . '<br />';
  }

  fclose($handle);
} else {
  echo "Could not open file.";
}

echo nl2br($data);
