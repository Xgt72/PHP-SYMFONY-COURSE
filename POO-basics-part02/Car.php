<?php

require_once 'Vehicle.php';

class Car extends Vehicle
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
    private $energyLevel = 50;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->nbWheels = 4;
        $this->setEnergy($energy);
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
     * @return void
     */
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * @return integer
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * @param integer $energyLevel
     * @return void
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}
