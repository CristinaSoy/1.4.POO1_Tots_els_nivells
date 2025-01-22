<?php declare(strict_types=1);

class Pelicula {
    protected string $titulo;
    protected int $duracion; //en minutos
    protected string $direccion; //nombre director/a

function __construct(string $titulo, int $duracion, string $direccion) {
    $this->titulo = $titulo;
    $this->duracion = $duracion;
    $this->direccion = $direccion;
}
}



?>