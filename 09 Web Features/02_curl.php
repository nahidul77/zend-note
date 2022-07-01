<?php

$curlResource = curl_init("https://requestb.in/13fkcqj1");

$postData = ['name' => 'Nahid'];

curl_setopt($curlResource, CURLOPT_POST, true);
curl_setopt($curlResource, CURLOPT_POSTFIELDS, $postData);

$response = curl_exec($curlResource);

var_dump($response);

$err = curl_error($curlResource);

curl_close($curlResource);
