<?php declare(strict_types=1);

require_once "PockerDice.php";

function lanzarCincoDados() : array {
    $cincoTiradas=[];
    for ($i=0; $i<5; $i++) {
        $tirada = new PockerDice();
        echo $tirada->throw();
        $cincoTiradas[$i]= $tirada->shapeName();
    }
    return $cincoTiradas;
}

function getTotalThrows(array $tiradas) : string {
    return "El numero total de tiradas es " .
     count($tiradas);
}

$cincoTiradas= lanzarCincoDados();
echo "<pre>".print_r($cincoTiradas, true). "</pre>";
echo getTotalThrows($cincoTiradas);

?>