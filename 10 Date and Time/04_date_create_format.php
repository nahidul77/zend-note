<?php
$date = date_create("2023-03-15 22:25:00",timezone_open("Asia/Dhaka"));

echo date_format($date,"l"). "\n\n";

echo date_format($date,"d/m/Y H:i:s"). "\n\n"; 
?>