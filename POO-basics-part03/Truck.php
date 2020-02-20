<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    /**
     * @var int
     */
    private $storageCapacity;

    /**
     * @var int
     */
    private $loading = 0;

    public function __construct(string $color, int $nbSeats, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->nbWheels = 4;
        $this->setStorageCapacity($storageCapacity);
    }

    /**
     * @return integer
     */
    public function getStorageCapacity() : int
    {
        return $this->storageCapacity;
    }

    /**
     * @param integer $storageCapacity
     * @return void
     */
    private function setStorageCapacity(int $storageCapacity) : void
    {
        $this->storageCapacity = $storageCapacity;
    }

    /**
     * @return integer
     */
    public function getLoading(): int
    {
        return $this->loading;
    }

    /**
     * @param integer $loading
     * @return string
     */
    public function setLoading(int $loading) : string
    {
        $sentence = "";
        if ($this->loading + $loading > $this->storageCapacity) {
            $sentence = "You want to put too much load, reduce it before continue";
        } else {
            $this->loading = $loading;
            $sentence = "Load added to the truck";
        }
        return $sentence;
    }

    public function isFull() : string
    {
        $sentence = "";
        if ($this->loading == $this->storageCapacity) {
            $sentence = "full";
        } else {
            $sentence = "in filling";
        }
        return $sentence;
    }
}