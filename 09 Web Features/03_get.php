<?php

$getData = ['fans' => ['Ron', 'Jonathon', 'Anne Frank']];

$encodedString =  http_build_query($getData); //fans%5B0%5D=Ron&fans%5B1%5D=Jonathon&fans%5B2%5D=Anne+Frank

echo urldecode($encodedString);
