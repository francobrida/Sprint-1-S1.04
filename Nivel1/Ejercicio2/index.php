<?php
require_once "Shape.php";
require_once "Triangle.php";
require_once "Rectangle.php";

$newTriangle = new Triangle(12, 34);
$newRectangle = new Rectangle(34, 12);

echo "Area del triángulo: " . $newTriangle->calculateArea() . "<br>" .
"Área del rectángulo: " . $newRectangle->calculateArea();

?>