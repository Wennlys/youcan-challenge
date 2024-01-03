<?php

namespace Src\Product\Application;

use App\Http\Requests\UpdateProductRequest;
use Src\Product\Domain\Product;
use Src\Product\Domain\ProductRepository;

class UpdateProduct
{
    public function __construct(private ProductRepository $productRepository)
    {
    }

    public function execute(string $id, UpdateProductRequest $request)
    {
        $product = new Product(name: $request->get('name'), description: $request->get('description'), price: $request->get('price'));
        $this->productRepository->update($id, $product);
    }
}
