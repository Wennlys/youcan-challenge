<?php

use Src\Product\Application\CreateProduct;
use Src\Product\Domain\Product;
use Src\Product\Domain\ProductImage;
use Src\Product\Domain\ProductRepository;

describe('create product', function () {
    it('ensures product respository is being called', function () {
        $productRespositoryMock = Mockery::mock(ProductRepository::class);
        $productRespositoryMock->shouldReceive('save')->once();
        $createProduct = new CreateProduct($productRespositoryMock);
        $faker = \Faker\Factory::create();
        $productImage = new ProductImage($faker->colorName());
        $product = new Product($faker->name(), $faker->text(), $faker->text(), $productImage);
        $createProduct->execute($product);
    });
});
