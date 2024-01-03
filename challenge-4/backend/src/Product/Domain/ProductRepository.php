<?php

namespace Src\Product\Domain;

interface ProductRepository
{
    public function save(Product $product): bool;
    public function update($id, Product $product): bool;
}
