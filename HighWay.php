<?php


abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicles = [];

    /**
     * @var integer
     */
    protected $nbLane;

    /**
     * @var integer
     */
    protected $maxSpeed;

    abstract protected function addVehicle(Vehicle $vehicle);


    

    /**
     * Get the value of nbLane
     *
     * @return  integer
     */ 
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     *
     * @param  integer  $nbLane
     *
     * @return  self
     */ 
    public function setNbLane($nbLane) : void
    {
        $this->nbLane = $nbLane;
    }

    /**
     * Get the value of maxSpeed
     *
     * @return  integer
     */ 
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @param  integer  $maxSpeed
     *
     * @return  self
     */ 
    public function setMaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    

    /**
     * Get the value of currentVehicles
     *
     * @return  array
     */ 
    public function getCurrentVehicles() : array
    {
        return $this->currentVehicles;
    }

    /**
     * Set the value of currentVehicles
     *
     * @param  array  $currentVehicles
     *
     * @return  self
     */ 
    public function setCurrentVehicles( $currentVehicles) : void
    {
        $this->currentVehicles [] = $currentVehicles;

    }
} 