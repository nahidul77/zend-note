<?php

// print_r(file('source.txt'));

// echo join("\n", file("source.txt")); 

// echo join(file("source.txt"), "\n"); 

file_put_contents("target.txt", join(file("source.txt"), "\n"));
