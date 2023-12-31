<?php

namespace App\Actions\Product;

use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class UpdateProduct
{
    public function execute(string $id, UpdateProductRequest $request)
    {
        $product = Product::find($id);
        $name = $request->get('name');
        $description = $request->get('description');
        $price = $request->get('price');
        if ($name) {
            $product->name = $name;
        }
        if ($description) {
            $product->description = $description;
        }
        if ($price) {
            $product->price = $price;
        }

        return $product->save();
    }
}
