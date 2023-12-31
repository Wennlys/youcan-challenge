<?php

namespace Src\Product\Domain;

interface ProductRepository
{
    public function save(Product $product): bool;
}
