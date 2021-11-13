<?php

require_once __DIR__ . '/Roads.php';

class PedestrianWay extends HighWay
{
    private int $nbLane = 1;
    private int $maxSpeed = 10;
    
    public function __construct($nbLane, $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicles(Vehicle $vehicle)
    {
        if ($vehicle instanceof PedestrianWay) {        
        $this->setVehicle($vehicle);
        } else {
            return "Don't move ! It's not your way !";
        }
    }
}