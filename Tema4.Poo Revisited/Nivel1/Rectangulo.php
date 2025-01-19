<?php
class Rectangulo extends Shape {

    public function calculaArea() {
        return $this->alto * $this->largo;
    }
}