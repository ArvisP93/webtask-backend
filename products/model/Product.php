<?php

namespace products;

class Product
{
    public string $name;
    public int $price;
    public string $sku;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function __toString()
    {
        return "Product: " . $this->name;
    }

}