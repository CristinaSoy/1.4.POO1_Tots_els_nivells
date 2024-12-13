<?php
declare(strict_types=1);
echo "<h2>Sprint 1. Tema 4.POO1. Nivell 2</h2>";
echo "<h3>Exercici 1. Dau de poker </h3>";

require_once "PokerDice.php";

function lanzarDados(array $daus) : void {
    foreach($daus as $index => $dau) {
        $dau->lanzar();
    }
}
function mostrarResultados(array $daus) {
    foreach($daus as $index => $dau) {
        echo "Dau " . ($index + 1) . ": ".$dau->shapeName(). "<br>";
    }
}


function main() : void {
    // crear 5 daus

    $daus = [];
    for ($i = 0; $i<5; $i++) {
        $daus[] = new PokerDice();
    }

    lanzarDados($daus);

    mostrarResultados($daus);

    echo "Tirades totals : " . PokerDice::getTotalThrows() . "<br>";
}
main();

?>