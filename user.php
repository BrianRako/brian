<?php

// Fichier User.php
define('BR', '<br>');


class Moto
{
    public string $brand;
    public string $color;
    public float $maxSpeed;


    public function __construct(string $brand, string $color, float $maxSpeed)
    {
        $this->brand    = $brand;
        $this->color    = $color;
        $this->maxSpeed = $maxSpeed;
        
    }

    public function getDescription(): string
    {
        return $this->brand.' '.$this->color.' ayant une vitesse maximale de '.$this->maxSpeed.'km/h'.BR;
    }

    /**
    public function __destruct()
    {
        echo $this->brand . ' ' . $this->color . ' rentre au garage' . BR;
    }
     */

}


class Race
{
    public moto $moto1;
    public moto $moto2;

    public function __construct(moto $moto1, moto $moto2)
    {
        $this->moto1 = $moto1;
        $this->moto2 = $moto2;
    
    }

    public function StartRace()
    {
        if ($this->moto1->maxSpeed > $this->moto2->maxSpeed)
        {
            return $this->moto1;
        }
        return $this->moto2;
    }
}