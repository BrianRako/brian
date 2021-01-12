<?php

class AddProduct
{
    public $name;
    public $desc;
    public $price;
    public $image;

    public function __construct($name, $desc, $price, $image)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->$image = $image;
    }
}
