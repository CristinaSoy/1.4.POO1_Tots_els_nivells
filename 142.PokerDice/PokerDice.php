<?php
declare(strict_types=1);

class PokerDice {
    //Propiedades de la clase
    private static array $caras = ["As","K","Q","J","7","8"];
    private string $ultimaTirada = "";  
    private static int $tiradasTotales = 0; //Contador global
  
    public function lanzar() : void {
        $this->ultimaTirada = self::$caras[array_rand(self::$caras)];
        self::$tiradasTotales++; //incrementa el contador global
    }

    public function shapeName() : string {
        return $this->ultimaTirada;
    }

    public static function getTotalThrows() : int {
        return self::$tiradasTotales;
    }
}     

?>