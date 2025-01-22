<?php declare(strict_types=1);

require_once "Cinema.php";
require_once "Pelicula.php";

/* Presentar Catalogo de peliculas 
1. Entrar datos. 
   11. Crear cine -> formulario crearcine
   12. Crear pelicula -> form crear Pelicula

2. Consultar
    21.Listar peliculas en cada cine: -> boton
       (Todos los cines , todas las peliculas)
    22. Pelicula de mayor duracion - > boton
        (Todos los cines, pelicula mayor duracion)
    23. Para un director peliculas en proyeccion. 
*/

$inventarioCines=[];
$listadoPeliculas=[];

$opcion = htmlspecialchars($_GET["opcion"]);   
    
switch ($opcio) {
    case 1: //crear cine
        $nombre = htmlspecialchars($_GET["nombre"]);
        $poblacion = htmlspecialchars($_GET["poblacion"]);
        $listadoPeliculas = ($_GET["listadoPeliculas"]);
    
        $nombre="Coliseum";
        $poblacion="Vilanova";
        $cine1 = new Cinema($nombre, $poblacion);
        //añadirlo al inventario de cines
        $inventarioCines[] = $cine1;

        break;
    case 2: // crear pelicula
        $titulo = htmlspecialchars($_GET["titulo"]);
        $direccion = htmlspecialchars($_GET["direccion"]);
        $duracion =$_GET["duracion"];
    
        $titulo="Star Wars";
        $direccio="Steven Spielberg";

        $pelicula1 = new Pelicula($titulo, $duracion, $direccion);
        $listadoPeliculas[] = $pelicula1;
        break;
    case 3:

        break;
    case 4:
        break;
    case 5:
        break;
    case 0:
        break;
    default:
        echo "Introducir una opcion valida";

}






?>