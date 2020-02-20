<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Skateboard.php';

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


$skate = new Skateboard("Black", 1);

var_dump($civic->switchOn());
var_dump($civic->switchOff());

var_dump($bike->switchOn());
var_dump($bike->switchOff());
$bike->forward();
var_dump($bike->switchOn());