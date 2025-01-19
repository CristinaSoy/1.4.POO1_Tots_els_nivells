<?php declare(strict_types=1);

class Triangulo extends Shape {
    public function calculaArea() : float {
        return ($this->alto * $this->largo)/2;
    }
}
?>