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
        return 'la ' . $this->model . " est allumée !" . "<br>" ;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !" . "<br>";
    }

    public function brake(): string

    {

        $sentence = "";

        while ($this->currentSpeed > 0) 
        {

            $this->currentSpeed--;

            $sentence .= "calm down !". "<br>";

        }

        $sentence .= "I'm stopped !" . "<br>";

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