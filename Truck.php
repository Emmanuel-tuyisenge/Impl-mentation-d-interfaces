<?php

require_once 'Vehicle.php';


class Truck extends Vehicle
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

    private $capaStorage;

    private $load = 0;


    public function __construct(string $color, int $nbSeats, string $energy, int $capaStorage)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->capaStorage = $capaStorage;
    }

    public function full(){
        if($this->load === $this->capaStorage){
            return 'full !';
        }else {
            return 'in filling';
        }
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * @param int $energyLevel
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * @return mixed
     */
    public function getCapaStorage()
    {
        return $this->capaStorage;
    }

    /**
     * @param mixed $capaStorage
     */
    public function setCapaStorage($capaStorage): void
    {
        $this->capaStorage = $capaStorage;
    }

    /**
     * @return int
     */
    public function getLoad(): int
    {
        return $this->load;
    }

    /**
     * @param int $load
     */
    public function setLoad(int $load): void
    {
        $this->load = $load;
    }


}