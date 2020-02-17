<?php

class Vehicle {
    /** 
     * @var string
     */
    protected $color;

    /**
     * @var integer
     */
    protected $currentSpeed = 0;

    /**
     * @var integer
     */
    protected $nbSeats;

    /**
     * @var integer
     */
    protected $nbWheels = 2;

    public function __construct(string $color, int $nbSeats)
    {   
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return integer
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @return integer
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @return integer
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @param string $color
     * @return void
     */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }

    /**
     * @param integer $speed
     * @return void
     */
    public function setCurrentSpeed(int $currentSpeed) : void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    /**
     * @param integer $seats
     * @return void 
     */
    public function setNbSeats(int $seats) : void
    {
        $this->nbSeats = $seats;
    }

    /**
     * @param integer $wheels
     * @return void
     */
    public function setNbWheels(bool $wheels) : void
    {
        $this->nbWheels = $wheels;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}