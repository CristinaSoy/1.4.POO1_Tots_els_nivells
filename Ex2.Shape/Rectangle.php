<?php
declare(strict_types=1);
require_once "Shape.php";

class Rectangle extends Shape {
    public function calculaArea() : float {
        return ($this->ample * $this->alt);
    }

    public function print() : void {
        echo "Rectangle amb els següents paràmetres: ";
        parent::print();
        echo "Te un area de " . $this->calculaArea() ."<br>" ;
    }
}

?>