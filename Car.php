<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var boolean
     */
    private bool $start = false;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function switchOn(): bool
    {
        // TODO: Implement switchOn() method.
        return true;
    }

    public function switchOff(): bool
    {
        // TODO: Implement switchOff() method.
        return false;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}