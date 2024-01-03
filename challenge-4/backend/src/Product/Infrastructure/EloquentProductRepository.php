<?php

namespace Src\Product\Infrastructure;

use App\Models\Product as ProductModel;
use Src\Product\Domain\Product;
use Src\Product\Domain\ProductRepository;

class EloquentProductRepository implements ProductRepository
{
    public function __construct(private readonly ProductModel $productModel)
    {
    }

    public function save(Product $product): bool
    {
        return $this->productModel->create($product->print());
    }

    public function update($id, Product $product): bool
    {
        $foundProductModel = $this->productModel->find($id);
        return $foundProductModel->updateOrFail($product->print());
    }
}
