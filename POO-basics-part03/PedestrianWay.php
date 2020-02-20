<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{

    protected $currentVehicles;
    protected $nbLane = 1;
    protected $maxSpeed = 10;

    public function addVehicle(\Vehicle $vehicle): string
    {
        $sentence = "";
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
            $sentence = "Vehicle added to the current vehicles";
        } else {
            $sentence = "You can't add this type of vehicle";
        }
        return $sentence;
    }
}
