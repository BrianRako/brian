<?php

// Fichier User.php
define('br', '<br>');

class Moto
{

    public string  $brand;
    public string  $color;
    public float   $maxSpeed;

    public function getDescription():string
    {

        return $this->brand. ' ' .$this->color. ' ayant une vitesse de ' .$this->maxSpeed. ' km/h.'.br;
    }
}
