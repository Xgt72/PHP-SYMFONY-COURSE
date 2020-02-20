<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    /**
     * @return bool
     */
    public function switchOn(): bool
    {
        return $this->currentSpeed > 10 ? true : false;
    }

    /**
     * @return bool
     */
    public function switchOff(): bool
    {
        return false;
    }
}
