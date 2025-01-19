<?php declare(strict_types=1);

//require_once "Triangulo.php";
abstract class Shape {
    //atributos
    protected int $alto;
    protected int $largo;

    public function __construct(int $alto, int $largo) {
        $this->alto = $alto;
        $this->largo = $largo;
    }

    abstract protected function calculaArea();

    public function __toString() : string
    {
        return "<p> Objeto: ".get_class($this) . "<br>Altura: " . $this->alto . 
            "<br>Largo: " . $this->largo . " <br>Area: " . $this->calculaArea(). "</p>";        
    }    
}
?>