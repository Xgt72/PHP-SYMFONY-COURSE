<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle();

echo $bike->forward();
echo "</br> Speed of the bike: " . $bike->getCurrentSpeed() . " km/h</br>";
echo $bike->brake();
echo "</br> Speed of the bike: " . $bike->getCurrentSpeed() . " km/h</br>";
echo $bike->brake();

var_dump($bike);
$bike->dump();

$civic = new Car("White", 5, "gasoline");
echo $civic->start() . "</br>";
echo "Speed of the " . $civic->getColor() . " car: " . $civic->getCurrentSpeed() . "km/h</br>";
echo $civic->forward() . "</br>";
echo "Speed of the " . $civic->getColor() . " car: " . $civic->getCurrentSpeed() . "km/h</br>";
echo $civic->brake() . "</br>";
echo "Speed of the " . $civic->getColor() . " car: " . $civic->getCurrentSpeed() . "km/h</br>";
var_dump($civic);