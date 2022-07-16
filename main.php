<?php
require "vendor/autoload.php";
use App\Barn;
use App\CollectorProduct;
use App\Animals\Cow;
use App\Animals\Chiken;

$barn = new Barn([
    new Cow(),
    new Cow(),
    new Cow(),
    new Cow(),
    new Cow(),
    new Cow(),
    new Cow(),
    new Cow(),
    new Cow(),
    new Cow(),
    new Chiken(),
    new Chiken(),
    new Chiken(),
    new Chiken(),
    new Chiken(),
    new Chiken(),
    new Chiken(),
    new Chiken(),
    new Chiken(),
    new Chiken(),
    new Chiken(),
    new Chiken(),
    new Chiken(),
    new Chiken(),
    new Chiken(),
    new Chiken(),
    new Chiken(),
    new Chiken(),
    new Chiken(),
    new Chiken()
]);

$countAnimals = $barn->getAnimalsCount();

//Информация о количестве каждого типа животных
foreach ($countAnimals as $key => $countAnimal) {
    echo $key . ':'.$countAnimal . "\n";
}

$allProducts = CollectorProduct::getCountCollectedProducts($barn->getAnimals(),7);

$sumProduct = CollectorProduct::getProductsSum($allProducts);

//Общая продукция
foreach ($sumProduct as $key => $item) {
    echo $key . ':'.$item . "\n";
}

$barn->addAnimal(new Chiken());
$barn->addAnimal(new Chiken());
$barn->addAnimal(new Chiken());
$barn->addAnimal(new Chiken());
$barn->addAnimal(new Chiken());
$barn->addAnimal(new Cow());

$countAnimals = $barn->getAnimalsCount();

//Информация о количестве каждого типа животных
foreach ($countAnimals as $key => $countAnimal) {
    echo $key . ':'.$countAnimal . "\n";
}

$allProducts = CollectorProduct::getCountCollectedProducts($barn->getAnimals(),7);

$sumProduct = CollectorProduct::getProductsSum($allProducts);

//Общая продукция
foreach ($sumProduct as $key => $item) {
    echo $key . ':'.$item . "\n";
}

?>


