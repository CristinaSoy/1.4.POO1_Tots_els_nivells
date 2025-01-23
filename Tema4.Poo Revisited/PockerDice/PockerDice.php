<?php declare (strict_types=1);

class PockerDice {
    static array $dado = ["As","K", "Q", "J", "7", "8"];
    private int $ultimaTirada;
    private static int $contador = 0;

    public function throw() : void {
        $this->ultimaTirada = rand(0, 5);
        self :: $contador++;        
    }
  
    public function shapeName() : string {
        return self::$dado[$this->ultimaTirada];        
    }    

    public static function obtieneContador() : int {
        return self::$contador;
    }
}
?>