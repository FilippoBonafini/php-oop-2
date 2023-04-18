<?php
class Animal
{
    private $species;
    private $size;
    private $age;


    public function __construct(string $_species, string $_size, string $_age)
    {
        $this->species = $_species;
        $this->size = $_size;
        $this->age = $_age;
    }

    public function get_species()
    {
        return $this->species;
    }

    public function get_size()
    {
        return $this->size;
    }

    public function get_age()
    {
        return $this->age;
    }
}
