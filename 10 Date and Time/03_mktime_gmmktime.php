<?php

echo "Time & Date : " . date("d-m-Y h:i:sa"). "\n\n";

echo date("l",mktime(0,0,0,10, 15, 2023)). "\n\n";

echo date("d-m-Y h:i:sa",mktime(0,0,0,10, 15, 2023)). "\n\n";
echo date("d-m-Y h:i:sa",time()). "\n\n";

echo date("d-m-Y h:i:sa",gmmktime(0,0,0,10, 15, 2023)). "\n\n";
echo date("d-m-Y h:i:sa",time());

?>