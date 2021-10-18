<?php
require_once 'Vehicle.php';


class Truck extends Vehicle
{
    private int $capacity;

    private int $loading;



    public function __construct(string $color, int $nbSeats,int $capacity, int $loading, string $energy)
    {

        $this->color = $color;

        $this->nbSeats = $nbSeats;

        $this->capacity = $capacity;

        $this->loading = $loading;

        $this->energy = $energy;


    }

    public function loadingState(int $loading, int $capacity) {
        if ($loading > $capacity){
            return "in filling";
        }else{
            return "full";
        }
    }

}