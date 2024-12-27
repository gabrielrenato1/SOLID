<?php

require __DIR__.'/vendor/autoload.php';

use App\polygons\Rectangle;
use App\polygons\Square;
use App\Polygon;

$polygon = new Polygon;

$polygon->setForm(new Rectangle);

$rectangle = $polygon->getForm();

$rectangle->setHeight(5);
$rectangle->setWidth(10);

echo "<pre>";
    print_r($polygon->getForm());
echo "</pre>";
echo "<h3> Rectangle Area: " . $polygon->getArea() . " </h3>";

$polygon->setForm(new Square);
$square = $polygon->getForm();

$square->setHeight(5);

echo "<pre>";
    print_r($polygon->getForm());
echo "</pre>";
echo "<h3> Square Area: " . $polygon->getArea() . " </h3>";