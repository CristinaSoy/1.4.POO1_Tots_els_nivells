<?php declare(strict_types=1);

require_once "PockerDice.php";

function lanzarDados($dados) : void {
    foreach($dados as $dado) {
        $dado -> throw();
    }
}

function mostrarUltimasTiradas($dados) : void {
    $cara = "";
    foreach($dados as $index =>$dado) {
        $cara = $dado->shapename(); 
        echo "Dado ". $index+1 . ": ". $cara . "<br>";
    }
   
}        

// crear un array con 5 dados
$dados = [];
for ($i=0; $i<5; $i++) {
    $dados[] = new PockerDice();
}
//recorre el array y lanza dados
lanzarDados($dados);

mostrarUltimasTiradas($dados);

echo PockerDice::obtieneContador();

?>