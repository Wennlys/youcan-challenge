<?php

namespace src\Product\Infrastructure;

use src\Product\Domain\Product;
use src\Product\Domain\ProductRepository;

class SQLProductRepository implements ProductRepository
{
    public function save(Product $product): bool
    {
        return true;
    }
}
