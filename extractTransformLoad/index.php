<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Reader;

$reader = new Reader();
$reader->setDirectory(__DIR__ . '/files');
$reader->setFile('dados.csv');

echo "<pre>";
    print_r($reader->readFile());
echo "</pre>";
