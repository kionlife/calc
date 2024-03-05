<?php

require __DIR__ . '/../vendor/autoload.php';

use Calc\Shapes\Circle;
use Calc\Shapes\Rectangle;

$radius = readline('Enter circle radius: ');
$circle = new Circle($radius);
echo "Circle Area: " . $circle->getArea() . "\n";
echo "Circle Perimeter: " . $circle->getPerimeter() . "\n";

$w = readline('Enter rectangle width: ');
$h = readline('Enter rectangle height: ');

$rectangle = new Rectangle($w, $h);
echo "Rectangle Area: " . $rectangle->getArea() . "\n";
echo "Rectangle Perimeter: " . $rectangle->getPerimeter() . "\n";
