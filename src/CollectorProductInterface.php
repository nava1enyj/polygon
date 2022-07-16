<?php

namespace App;

interface CollectorProductInterface
{
    public static function getCountCollectedProducts(array $animals,int $days);

    public static function getProductsSum(array $products);
}