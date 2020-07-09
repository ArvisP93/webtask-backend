<?php

namespace products;

use response\Response;

class Controller
{
    private Response $response;
    private ProductRepository $productRepository;


    public function __construct(ProductRepository $products, Response $response)
    {
        $this->productRepository = $products;
        $this->response = $response;
    }

    public function productList()
    {
        $products = new \stdClass();
        $obtainedProducts = $this->productRepository->obtainProducts();
        foreach ($obtainedProducts as $product) {
            $products->products[] = $product->serialize();
        }
        $this->response->make(true, $products);
    }
}