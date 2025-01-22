<?php declare (strict_types=1);

class PockerDice {
    static array $dado = ["As","K", "Q", "J", "7", "8"];
    private int $resultado;
    private static int $contador = 0;

    public function throw() : void {
        $this->resultado = rand(0, 5);
        self :: $contador++;        
    }
  
    public function shapeName() : string {
        return self::$dado[$this->resultado];        
    }    

    public static function obtieneContador() : int {
        return self::$contador;
    }

}
?>