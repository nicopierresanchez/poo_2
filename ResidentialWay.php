<?php

require_once __DIR__ . '/Roads.php';

class ResidentialWay extends HighWay
{
    private int $nbLane = 2;
    private int $maxSpeed = 50;
    
    public function __construct($nbLane, $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicles(Vehicle $vehicle)
    {
        if ($vehicle instanceof ResidentialWay) {        
        $this->setVehicle($vehicle);
        } else {
            return "Don't move ! It's not your way !";
        }
    }
}