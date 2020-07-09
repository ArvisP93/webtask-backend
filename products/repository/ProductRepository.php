<?php

namespace products;

interface ProductRepository
{
    function obtainProducts(): array;
}