<?php declare(strict_types=1);

require_once "PockerDice.php";

// instancia 5 veces un dado, ejectuta 5 veces el metodo throw y guarda rtdo junto con shapeName en array de tiradas
function lanzarCincoDados() : array {
    $resultados5=[];
    for ($i=0; $i<5; $i++) {
        $tirada = new PockerDice();
        echo $tirada->throw();
        $resultados5[$i]= $tirada->shapeName();
    }
    return $resultados5;
}

function getTotalThrows(array $tiradas) : string {
    return "Se han tirado " .
     count($tiradas) . " dados.";
}

$cincoTiradas= lanzarCincoDados();
echo "<pre>".print_r($cincoTiradas, true). "</pre>";
echo getTotalThrows($cincoTiradas);

echo PockerDice::obtieneContador();


?>