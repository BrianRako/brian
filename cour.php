<?php

// Fichier index.php

require_once 'user.php';

$moto = new Moto();
$moto->brand = "Honda";
$moto->color = "verte";
$moto->maxSpeed = 238;

echo $moto->getDescription();

$moto2 = new Moto();
$moto2->brand = 'Kawasaki';
$moto2->color = 'noir';
$moto2->maxSpeed = 238;

echo $moto2->getDescription();