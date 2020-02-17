<?php
class Bicycle
{

    /** 
     * @var string
     */
    private $color;

    /**
     * @var boolean
     */
    private $luggageRack;

    /**
     * @var integer
     */
    private $currentSpeed;

    /**
     * @var integer
     */
    private $nbSeats = 1;

    /**
     * @var integer
     */
    private $nbWheels = 2;

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return boolean
     */
    public function getLuggageRack(): bool
    {
        return $this->luggageRack;
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
     * @param boolean $luggage
     * @return void
     */
    public function setLuggageRack(bool $luggage) : void
    {
        $this->luggageRack = $luggage;
    }

    /**
     * @param integer $speed
     * @return void
     */
    public function setCurrentSpeed(int $speed) : void
    {
        if ($speed >= 0) {
            $this->currentSpeed = $speed;
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

    public function dump()
    {
        var_dump($this);
    }
}
