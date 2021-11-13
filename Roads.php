<?php

require_once __DIR__ . '/Vehicle.php';


abstract class HighWay
{
    private array $currentVehicles = [];
    private int $nbLane;
    private int $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    //Getters et Setters 
    public function getLane(): int
    {
        return $this->nbLane;
    }

    public function setLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }
    public function getSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
    public function getVehicle(): array
    {
        return $this->currentVehicles;
    }

    public function setVehicle($currentVehicles): void
    {
        $this->currentVehicles[] = $currentVehicles;
    }

    abstract public function addVehicles(Vehicle $vehicle);
    
}