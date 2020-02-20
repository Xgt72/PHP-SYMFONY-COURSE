<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{

    protected $currentVehicles;
    protected $nbLane = 2;
    protected $maxSpeed = 50;

    public function addVehicle(\Vehicle $vehicle): string
    {
        $sentence = "";
        $this->currentVehicles[] = $vehicle;
        $sentence = "Vehicle added to the current vehicles";
        return $sentence;
    }
}
