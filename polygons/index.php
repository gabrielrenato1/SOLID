<?php

use App\polygons\Rectangle;
use App\polygons\Square;

require __DIR__.'/vendor/autoload.php';

$rectangle = new Rectangle();

$rectangle->setHeight(5);
$rectangle->setWidth(10);

echo $rectangle->getArea();

$square = new Square();

$square->setHeight(5);

echo $square->getArea();

$rectangle = new Square();

$rectangle->setHeight(5);
$rectangle->setWidth(10);

echo $rectangle->getArea();
