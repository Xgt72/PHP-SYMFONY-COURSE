<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{

    protected $currentVehicles;
    protected $nbLane = 4;
    protected $maxSpeed = 130;

    public function addVehicle(\Vehicle $vehicle): string
    {
        $sentence = "";
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
            $sentence = "Vehicle added to the current vehicles";
        } else {
            $sentence = "You can't add this type of vehicle";
        }
        return $sentence;
    }
}
