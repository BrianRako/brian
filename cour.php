<?php


require_once 'user.php';

$tesla = new ElectricsCar(50000, 'Tesla', 560);
$renault = new GasolineCar(20000, 'Renault', 100);

DisplayedGetCharacteristics($tesla);
DisplayedGetCharacteristics($renault);

