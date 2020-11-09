<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    protected $nbLane = 1; 
    protected $currentSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard){
            $this->setCurrentVehicles($vehicle);
        }
    }
}