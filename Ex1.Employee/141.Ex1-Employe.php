<?php
declare(strict_types=1);
echo "<h2>Sprint 1. Tema 4. Poo 1. Nivell 1.</h2>";
echo "<h3>Exercici 1. Clase Employee con métode intialize y print </h3>";

require_once "Employee.php";

$empleat1 = new Employee();
$empleat1->initialize("Carla",6001);
echo $empleat1->print();

