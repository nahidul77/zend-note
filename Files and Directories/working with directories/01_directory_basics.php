<?php

/**
 * cwd - current working directory (unix similar pwd)
 * chdir - change directory (unix similar cd)
 */


echo getcwd() . "\n";

chdir('assets');

echo getcwd() . "\n";

chdir('..');

echo getcwd() . "\n";

chdir(__DIR__ . '/assets');

echo getcwd() . "\n";
