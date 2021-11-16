<?php
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";

$circle = new Circle("Circle N", 6);
echo "Circle area: " . $circle->getArea() . "<br>";

$rectangle = new Rectangle("Rectangle N", 6,8);
echo "Rectangle area: " . $rectangle->getArea() . "<br>";


$square = new Square("Square",9);
echo "Square area: " . $square->getArea() . "<br>";