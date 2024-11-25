<?php
namespace Models;

class Carta {
    const PALOS = ["ESPADAS", "OROS", "COPAS", "BASTOS"];
    const CARTAS = [
        1 => "as", 2 => "dos", 3 => "tres", 4 => "cuatro", 5 => "cinco",
        6 => "seis", 7 => "siete", 8 => "ocho", 9 => "nueve",
        10 => "sota", 11 => "caballo", 12 => "rey"
    ];

    public function __construct(private int $numero, private string $palo) {
        $this->numero = $numero;
        $this->palo = $palo;
    }

    /**
     * @return int
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * @param int $numero
     */
    public function setNumero(int $numero): void
    {
        $this->numero = $numero;
    }



    /**
     * @return string
     */
    public function getPalo(): string
    {
        return strtolower($this->palo);
    }

    /**
     * @param string $palo
     */
    public function setPalo(string $palo): void
    {
        $this->palo = $palo;
    }
    public static function compruebaNumero($numero){
        if(array_key_exists($numero, self::CARTAS)) {
            return true;
        }else{
            return false;
        }
    }

    public static function compruebaPalo($palo){
        if(array_key_exists($palo, self::PALOS)) {
            return true;
        }else {
            return false;
        }
    }


}
