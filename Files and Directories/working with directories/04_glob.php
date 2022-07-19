<?php

/**
 * 
 * glob pattern 
 *  ? = any characters
 *  * = zero or more
 *  [abc] = any character in the set
 *  [!abc] = any character not in the set
 *  \ = Escapes the pattern characters
 */


$entries = glob("*/*.txt");
foreach($entries as $entry) {
  echo $entry . '<br />';
}
