<?php
declare(strict_types=1);

class Employee {
    //atributs
    private string $nom;
    private float $sou;

    
    public function initialize(string $nom, float $sou) {
        $this->nom = $nom;
        $this->sou= $sou;
    }
    
    public function impostos() : string {
        return ($this->sou > 6000)? "Ha de pagar impostos":"No ha de pagar impostos";
    }
    
    public function print() : void {
        echo "<p> $this->nom, sou: $this->sou €:</p>";
        echo $this->impostos();
        
    }
}

?>
