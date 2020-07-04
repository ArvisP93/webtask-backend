<?php

namespace products;

interface ProductRepository
{
    function obtainProducts(int $count);
}