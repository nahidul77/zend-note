<?php

$dom = new DOMDocument('1.0', 'utf-8');

$books = $dom->createElement('books');
$book_1 = $dom->createElement('book');

$name_1 = $dom->createElement('name', 'PHP an introduction');
$price_1 = $dom->createElement('price', '700');
$id_1 = $dom->createElement('id', '1');

$attr_1 = $dom->createAttribute('v');
$attr_1->value = '1';

$id_1->appendChild($attr_1);

$namespace = 'www.example.com/libraryns';





print_r($dom->saveXML());
