<?php namespace App\Animals;

class Cow extends Animal{
    private $name = 'корова';

    public function getName()
    {
       return $this->name;
    }

    public function getProduct(){
        // В литрах
        $milk = rand(8,12);
        return ['молоко' => $milk];
    }
}