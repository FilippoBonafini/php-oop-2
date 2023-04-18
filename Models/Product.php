<?php

class Product
{
    private $name;
    private $description;
    private $animal;
    private $category;
    private $price;

    public function __construct(string $_name, string $_description, string $_animal, string $_category, int $_price)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->animal = $_animal;
        $this->category = $_category;
        $this->price = $_price;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_description()
    {
        return $this->description;
    }

    public function get_category()
    {
        return $this->category;
    }

    public function get_price()
    {
        return $this->price;
    }
}
