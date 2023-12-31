<?php

namespace Src\Product\Application;

use Src\Product\Domain\Product;
use src\Product\Domain\ProductRepository;

class CreateProduct
{
    public function __construct(private readonly ProductRepository $productRepository)
    {
    }

    public function execute(Product $product): void
    {
        $this->productRepository->save($product);
    }
}
