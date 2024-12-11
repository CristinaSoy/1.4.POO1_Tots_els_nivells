<?php
declare(strict_types=1);
echo "<h2>Sprint 1. Tema 4. Poo 1. Nivell 1.</h2>";
echo "<h3>Exercici 1. Clase Employee con métode intialize y print </h3>";

class Employee {
    //atributs
    private string $nom;
    private float $sou;

    
    public function initialize(string $nom, float $sou) {
        $this->nom = $nom;
        $this->sou= $sou;
    }
    
    public function impostos() : string {
        return ($this->sou > 6000)? "Ha de pagar impostos":"No ha de pagar impostos";
    }

    public function print() : void {
       echo "<p> Empleada: $this->nom, sou: $this->sou €: </p>";
       echo $this-> impostos();
    }
}

$empleat1 = new Employee();
$empleat1->initialize("Carla",6001);
$empleat1->print();

echo "<h3>Exercici 2. Clase Shape amb métode constructor i subclasses Triangle i Rectangle </h3>";

class Shape {
    protected $ample;
    protected $alt;

    public function __construct(float $ample, float $alt) {
        $this->ample= $ample;
        $this-> alt = $alt;
    }
    public function print() : void {
        echo "ample: $this->ample i alt: $this->alt<br>";
    }
}

class Triangle extends Shape {
    
    public function area() : float {
        return ($this->ample * $this->alt)/2;
    }
    
    public function print() : void {
        echo "Triangle amb els següents paràmetres: ";
        parent::print();
        echo "Te un area de " . $this->area(). " <br>";
    }
}

class Rectangle extends Shape {
    public function area() : float {
        return ($this->ample * $this->alt);
    }

    public function print() : void {
        echo "Rectangle amb els següents paràmetres: ";
        parent::print();
        echo "Te un area de " . $this->area() ."<br>" ;
    }
}

$triangle1 = new Triangle(10,3.5);
$triangle1-> print();

$rectangle1 = new Rectangle(10,2);
$rectangle1-> print();

?>