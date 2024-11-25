<?php
namespace Models;

class Barajaes
{
    private array $baraja;

    public function __construct(){
        $baraja = [];
        $palos = Carta::PALOS;
        for ($i = 0;$i < sizeof($palos);$i++){
            for ($j = 1; $j < sizeof($palos); $j++){
                $carta = new Carta($j, $palos[$i]);
                $baraja[] = $carta;
            }
            $this->setBaraja($baraja);
        }
    }

    /**
     * @return array
     */
    public function getBaraja(): array
    {
        return $this->baraja;
    }

    /**
     * @param array $baraja
     */
    public function setBaraja(array $baraja): void
    {
        $this->baraja = $baraja;
    }

}