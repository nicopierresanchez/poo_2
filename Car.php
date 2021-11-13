<?php
require_once 'Vehicle.php';


class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];

    private string $energy;
     
    private int $energyLevel;
    
    public function __construct( string $color, int $nbSeats, string $energy)
    {

        $this->color = $color;

        $this->nbSeats = $nbSeats;

        $this->energy = $energy;
    }

    public function start():string
    {
        return 'la ' . $this->model . " est allumée !" . PHP_EOL ;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !" . PHP_EOL;
    }

    public function brake(): string

    {

        $sentence = "";

        while ($this->currentSpeed > 0) 
        {

            $this->currentSpeed--;

            $sentence .= "calm down !". PHP_EOL;

        }

        $sentence .= "I'm stopped !" . PHP_EOL;

        return $sentence;

    }
    
    public function setEnergy(string $energy): Car

{

    if (in_array($energy, self::ALLOWED_ENERGIES)) {

        $this->energy = $energy;

    }

    return $this;

}

}