<?php
declare(strict_types=1);
echo "<h2>Sprint 1. Tema 4.POO1. Nivell 2</h2>";
echo "<h3>Exercici 1. Dau de poker </h3>";

require_once "PokerDice.php";

$daus=[];
$num = 5;

function crearDaus(int $num, array $daus) : array {
    for ($i = 0; $i<$num; $i++) {
        $daus [$i] = new PokerDice();
    }
return $daus;
}

foreach(crearDaus($num, $daus) as $index => $dau) {
    $dau->throw();
    echo "<br> Dau " . ($index + 1) . ": ";
    $dau->shapeName();
    echo "<br>";
}

?>