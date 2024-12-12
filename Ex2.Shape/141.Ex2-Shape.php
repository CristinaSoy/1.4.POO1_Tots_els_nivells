<?php
declare(strict_types=1);
echo "<h2>Sprint 1. Tema 4. Poo 1. Nivell 1.</h2>";
echo "<h3>Exercici 2. Clase Shape amb métode constructor i subclasses Triangle i Rectangle </h3>";

require_once "Shape.php";
require_once "Triangle.php";
require_once "Rectangle.php";

$triangle1 = new Triangle(10,3.5);
$triangle1-> print();

$rectangle1 = new Rectangle(10,2);
$rectangle1-> print();

?>