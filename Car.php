<?php

class Car {
    private $nbWheels = 4;
    private $currentSpeed = -1;
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel = 50;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    /**
     * @return string
     */
    public function forward() : string
    {
        $sentence = "";
        if ($this->currentSpeed >= 0) {
            $this->currentSpeed = 80;
            $sentence = "Your car's running at " . $this->currentSpeed . "km/h";
        } else {
            $sentence = "You need to start your engine";
        }        

        return $sentence;
    }

    /**
     * @return string
     */
    public function brake() : string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    /**
     * @return string
     */
    public function start() : string
    {
        $sentence = "";
        if ($this->energyLevel > 0) {
            $this->currentSpeed = 0;
            $sentence = "Engine is started";
        } else {
            $sentence = "You don't have enought energy to start your engine, fill up the tank !!";
        }
        return $sentence;
    }

    /**
     * @return integer
     */
    public function getNbWheels() : int{
        return $this->nbWheels;
    }

    /**
     * @return integer
     */
    public function getCurrentSpeed() : int
    {
        return $this->currentSpeed;
    }

    /**
     * @return string
     */
    public function getColor() : string{
        return $this->color;
    }

    /**
     * @return integer
     */
    public function getNbSeats() : int
    {
        return $this->nbSeats;
    }

    /**
     * @return string
     */
    public function getEnergy() : string
    {
        return $this->energy;
    }

    /**
     * @return integer
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
}