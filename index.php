<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'LightableInterface.php';
require_once 'Vehicle.php';


$bicycle = new Bicycle('sliver', 1);
$bicycle->setCurrentSpeed(15);
echo $bicycle->switchOn() . '<br>';

$nakamura = new Bicycle('black', 2);
$nakamura->setCurrentSpeed(6);
echo $nakamura->switchOn(). '<br>';

$car = new Car('white', 5, 'fuel');
echo $car->switchOn() . '<br>';

var_dump($bicycle);
var_dump($nakamura);
var_dump($car);
