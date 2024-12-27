<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Reader;

$data = [];

$reader = new Reader();
$reader->setDirectory(__DIR__ . '/files');
$reader->setFile('dados.txt');

$data = $reader->readFile();

$reader->setFile('dados.csv');

$data = array_merge($data, $reader->readFile());

echo "<pre>";
    print_r($data);
echo "</pre>";
