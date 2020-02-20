<?php
require_once 'Vehicle.php';

class ElectricBike extends Vehicle implements RechargeableInterface
{
    private $chargeLevel;

    public function charge(int $percentage) : int
    {
        $this->chargeLevel = $percentage;
        return $this->chargeLevel;
    }

    public function unload(int $percentage) : int
    {
        $this->chargeLevel = $percentage;
        return $this->chargeLevel;
    }
}