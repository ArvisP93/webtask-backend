<?php

namespace products;

require_once("products/repository/ProductRepository.php");

class InMemoryRepository implements ProductRepository
{
    public function obtainProducts(int $count)
    {
        $disc = new Product("Disc", 10);
        $chair = new Product("Chair", 50);
        $game = new Product("War and Peace", 100);
        $game2 = new Product("War and Peace2", 150);
        $game3 = new Product("War and Peace3", 150);

        $products = new \stdClass();
        $products->products = [$disc, $chair, $game, $game2, $game3];

        return $products;
    }

}