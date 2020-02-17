<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bike = new Bicycle("Red", 1);

echo $bike->forward();
echo "</br> Speed of the bike: " . $bike->getCurrentSpeed() . " km/h</br>";
echo $bike->brake();
echo "</br> Speed of the bike: " . $bike->getCurrentSpeed() . " km/h</br>";
echo $bike->brake();

var_dump($bike);

$civic = new Car("White", 5, "gasoline");
echo $civic->forward() . "</br>";
echo "Speed of the " . $civic->getColor() . " car: " . $civic->getCurrentSpeed() . "km/h</br>";
echo $civic->brake() . "</br>";
echo "Speed of the " . $civic->getColor() . " car: " . $civic->getCurrentSpeed() . "km/h</br>";
var_dump($civic);

var_dump(Car::ALLOWED_ENERGIES);

$scania = new Truck("Orange", 2, 44000);
echo "Speed of the " . $scania->getColor() . " truck: " . $scania->getCurrentSpeed() . "km/h</br>";
echo $scania->forward() . "</br>";
echo "Speed of the " . $scania->getColor() . " truck: " . $scania->getCurrentSpeed() . "km/h</br>";
echo $scania->brake() . "</br>";
echo "Speed of the " . $scania->getColor() . " truck: " . $scania->getCurrentSpeed() . "km/h</br>";
echo "Load of the truck: " . $scania->getLoading() ."kg</br>";
echo $scania->setLoading(8000);
echo "Load of the truck: " . $scania->getLoading() ."kg</br>";
echo $scania->isFull();
var_dump($scania);