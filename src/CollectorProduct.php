<?php namespace App;

class CollectorProduct implements CollectorProductInterface {

    public static function getCountCollectedProducts(array $animals,int $days){

        $products = [];

            foreach ($animals as $animal) {
                $products[] = $animal->getProduct();
            }


        return $products;
    }

    public static function getProductsSum(array $products){
        $sumProducts = [];
        foreach ($products as $product) {
            foreach ($product as $key=>$item) {
                if (!isset($sumProducts[$key])){
                    $sumProducts[$key]=0;
                }

                $sumProducts[$key] += $item;
            }
        }

        return $sumProducts;
    }
}