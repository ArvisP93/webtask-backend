<?php

namespace products;

use database\Database;

require_once("products/repository/ProductRepository.php");

class DatabaseRepository implements ProductRepository
{
    private Database $database;

    public function __construct()
    {
        $this->database = Database::getInstance();
    }

    public function obtainProducts(): array
    {
        $result = [];
        $dbProducts = $this->database->selectAll("products");
        foreach ($dbProducts as $dbProduct) {
            $result[] = $this->transformDbRowToProduct($dbProduct);
        }

        return $result;
    }

    private function transformDbRowToProduct(array $dbProduct): Product
    {
        $product = new Product($dbProduct["name"], $dbProduct["price"], $dbProduct["sku"]);
        $product->setId($dbProduct["id"]);
        $product->setDeleted($dbProduct["deleted"]);

        return $product;
    }

    public function isNotDeleted(array $dbProduct): bool
    {
        return !$dbProduct["deleted"];
    }

}