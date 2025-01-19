<?php declare(strict_types=1);

class Employee {
    //atributos
    private string $nombre;
    private int $sueldo;

    public function initialize(string $nombre, int $sueldo) : void {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function pagaImpuestos() : void {
        echo $this->nombre;
        if ($this->sueldo > 60000) {
            echo " paga impuestos";
        } else {
            echo " no paga impuestos";
        }
    }

}


?>