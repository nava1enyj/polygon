<?php namespace App\Animals;

class Chiken extends Animal{
    private $name = 'курица';

    public function getName()
    {
       return $this->name;
    }

    public function getProduct(){
        $egg = rand(0,1);
        return ['яйцо' => $egg];
    }
}