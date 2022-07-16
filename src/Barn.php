<?php namespace App;

class Barn{

    private $animals;

    public function __construct(array $animals){
        $this->animals = $animals;
    }

     public function getAnimals()
    {
        return $this->animals;
    }


    public function addAnimal(object $animals)
    {
        $this->animals[] = $animals;
    }

    public function getAnimalsCount(): array
    {
        foreach($this->animals as $animal){
            $animalsName[] = $animal->getName();
        }
        return array_count_values($animalsName);
    }

}