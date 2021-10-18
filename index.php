<?php

require ("Car.php");
require ('Bicycle.php');
require ('Truck.php');

$bicycle = new Bicycle('blue', 1);

echo $bicycle->forward();

var_dump($bicycle);


$car = new Car('green', 4, 'electric');

echo $car->forward();

var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

$camion = new truck ('white', 4, 40, 20 , 'fuel');

var_dump($camion);
echo $camion->loadingState(40, 20);

echo $camion->forward();
echo $camion->brake();