<?php

require_once __DIR__ . '/Roads.php';


class MotorWay extends HighWay
{
    private int $nbLane = 4;
    private int $maxSpeed = 130;


    public function __construct($nbLane, $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicles(Vehicle $vehicle)
    {
        if ($vehicle instanceof MotorWay) {        
        $this->setVehicle($vehicle);
        } else {
            return "Don't move ! It's not your way !";
        }
    }
}