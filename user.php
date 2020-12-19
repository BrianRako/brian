<?php

// Fichier User.php

define('BR', '<br>');

class Car
{
    public float $price;
    public string $brand;

    public function __construct(float $price, string $brand)
    {
        $this->price = $price;
        $this->brand = $brand;

    }

    public function getCharacteristics(): array
    {
        return [
            'price' => $this->price,
            'brand' => $this->brand,

        ];
    }
}

class ElectricsCar extends Car
{
    public float $autonomiebattery;

    public function __construct(float $price, string $brand, float $autonomiebattery)
    {
        parent::__construct($price, $brand);
        $this->autonomiebattery = $autonomiebattery;
    }

    public function getCharacteristics(): array
    {
        $charasteristics = parent::getCharacteristics();
        $charasteristics['autonomybattery'] = $this->autonomiebattery;

        return $charasteristics;

    }
}

class  GasolineCar extends Car
{
    public float $co2emission;

    public function __construct(float $price, string $brand, float $co2emission)
    {
        parent::__construct($price, $brand);
        $this->co2emission = $co2emission;
    }

    public function getCharacteristics(): array
    {
        $charasterictics =  parent::getCharacteristics();
        $charasterictics['co2emission'] = $this->co2emission;

        return $charasterictics;
    }
}

function DisplayedGetCharacteristics(Car $car)
{
    echo '<ul>';
    foreach ($car->getCharacteristics() as $name => $value)
    {
        echo '<li>'.$name.' : '.$value.'</li>';

    }
    echo '<ul>';
}







