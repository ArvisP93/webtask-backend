<?php

namespace products;

use response\Response;
use validation\CountValidator;

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
        $count = $_GET["count"];
        if (CountValidator::validate($count)) {
            $this->response->make(true, $this->productRepository->obtainProducts((int)$count));
        } else {
            echo "Property count with value: $count is invalid";
        }
    }
}