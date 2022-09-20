<?php

#52_____________________________

/**
 * addslashes(string $string): string
Returns a string with backslashes added before characters that need to be escaped. These characters are:

single quote (')
double quote (")
backslash (\)
NUL (the NUL byte)
 */

// echo addslashes('I am a <b>small</b> "HTML" string, which is \'invalid\'</u>.');

// output : I am a <b>small</b> \"HTML\" string, which is \'invalid\'</u>.
