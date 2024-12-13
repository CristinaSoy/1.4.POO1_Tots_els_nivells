<?php
declare(strict_types=1);

class PokerDice {
    private array $faces = ["As","K","Q","J","7","8"];
    private ?string $ultimaTirada = null;
  
    public function throw() : string {
        $this->ultimaTirada = $this->faces[array_rand($this->faces)];
        return $this->ultimaTirada;
    }

    public function shapeName() : void {
        echo $this->ultimaTirada;
    }
}     

?>