<?php declare(strict_types=1);

class Cinema {
    //atributos:
    private string $nombre;
    private string $poblacion;
    private array $listadoPeliculas=[];

public function __constuct(string $nombre, string $poblacion) {
    $this->nombre = $nombre;
    $this->poblacion = $poblacion;
    $this->listadoPeliculas = [];
}

public function getNombre() : string {
    return $this->nombre;
}

//resto de getters

public function addPelicula (Pelicula $pelicula) : void {
    $this->listadoPeliculas[] = $pelicula;
}

}

?>