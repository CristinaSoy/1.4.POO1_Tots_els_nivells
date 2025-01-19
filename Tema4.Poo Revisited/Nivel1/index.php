<?php declare(strict_types=1);
/*
require_once "Employee.php";

$empleado1 = new Employee();
$empleado1 -> initialize("Cristina", 100000);
$empleado1 -> pagaImpuestos();
*/

require_once "Shape.php";
require_once "Triangulo.php";
require_once "Rectangulo.php";

$triangulo1 = new Triangulo(3,4);
echo $triangulo1;

$rectangulo1 = new Rectangulo(6,2);
echo $rectangulo1;
?>