<?php

namespace Src\Product\Domain;

class Product
{
    public function __construct(
        private string $name,
        private string $description,
        private string $price,
        private ProductImage $image,
        private array $categories = [],
        private ?int $id = null
    ) {

    }
}