<?php

/**
 * MOde
 * 
"r" - Read only. Starts at the beginning of the file

"r+" - Read/Write. Starts at the beginning of the file

"w" - Write only. Opens and truncates the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file

"w+" - Read/Write. Opens and truncates the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file

"a" - Write only. Opens and writes to the end of the file or creates a new file if it doesn't exist

"a+" - Read/Write. Preserves file content by writing to the end of the file

"x" - Write only. Creates a new file. Returns FALSE and an error if file already exists

"x+" - Read/Write. Creates a new file. Returns FALSE and an error if file already exists

"c" - Write only. Opens the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file

"c+" - Read/Write. Opens the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file

"e" - Only available in PHP compiled on POSIX.1-2008 conform systems.
 */
