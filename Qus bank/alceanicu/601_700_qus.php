<?php
$str = "Jane \"&\" 'Tarzan'";
echo htmlspecialchars($str); // Will only convert double quotes
echo "\n";
echo htmlspecialchars($str, ENT_QUOTES); // Converts double and single quotes
echo "\n";
echo htmlspecialchars($str, ENT_NOQUOTES); // Does not convert any quotes
