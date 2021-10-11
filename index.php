<?php

require_once 'Bicycle.php';
$bike = new Bicycle('blue');
var_dump($bike);

echo $bike-> forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo '<br><hr>';

require_once 'Car.php';
$auto = new Car('green', 5, 'electric');
var_dump($auto);

echo $auto-> start();
echo '<br>Vitesse de la voiture : ' . $auto->getCurrentSpeed() . 'km/h' . '<br>';
echo $auto-> forward();
echo '<br>Vitesse de la voiture : ' . $auto->getCurrentSpeed() . 'km/h' . '<br>';
echo $auto-> brake();
echo '<br>Vitesse de la voiture : ' . $auto->getCurrentSpeed() . 'km/h' . '<br>';
echo $auto-> brake();