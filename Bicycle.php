<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function __construct(string $color, int $nbSeats)
    {
        parent::__construct($color, $nbSeats);
    }

    public function switchOn(): bool
    {
        // TODO: Implement switchOn() method.
        if ($this->getCurrentSpeed() > 10) {
            return true;
        } else {
            return false;
        }
    }

    public function switchOff(): bool
    {
        // TODO: Implement switchOff() method.
        return false;

    }
}