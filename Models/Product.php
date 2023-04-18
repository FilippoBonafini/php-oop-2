<?php
require_once __DIR__ . '/Animal.php';

class Product
{
    private $name;
    private $description;
    private $category;
    private $animal;
    private $price;

    public function __construct(string $_name, string $_description, string $_category, Animal $animal, int $_price)
    {
        $this->name = $_name;
        $this->description = $_description;
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

    public function get_animal()
    {
        return $this->animal;
    }

    public function get_price()
    {
        return $this->price;
    }
}
