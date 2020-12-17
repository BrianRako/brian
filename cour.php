<?php

// Fichier index.php

require_once 'user.php';

$kawa = new Moto('Kawasaki', 'rouge', '217');
$bm = new Moto('BMW', 'bleue', '210');

$race = new Race($kawa, $bm);
echo $race->StartRace()->getDescription();