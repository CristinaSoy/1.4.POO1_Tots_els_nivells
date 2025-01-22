<?php declare(strict_types=1);

class Cinema {
    //atributos:
    protected string $nombre;
    protected string $poblacion;
    protected array $listadoPeliculas=[];

public function __constuct(string $nombre, string $poblacion) {
    $this->nombre = $nombre;
    $this->poblacion = $poblacion;
    $this->listadoPeliculas = [];
}

public function getNombre() : string {
    $this->
}

//resto de getters

public function addPelicula (Pelicula $pelicula) : void {
    $this->$listadoPeliculas[] = $pelicula;
}

}

?>