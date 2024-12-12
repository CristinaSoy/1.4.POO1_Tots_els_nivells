<?php
declare(strict_types=1);
require_once "Shape.php";

class Triangle extends Shape {
    public function calculaArea() : float {
        return ($this->ample * $this->alt)/2;
    }
    
    public function print() : void {
        echo "Triangle amb els següents paràmetres: ";
        parent::print();
        echo "Te un area de " . $this->calculaArea(). " <br>";
    }
}

?>