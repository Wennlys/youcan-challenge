<?php

use function Pest\Laravel\putJson;

describe('UpdateProduct', function () {
    it('updates a given product correctly', function () {
        $faker = Faker\Factory::create();
        $name = $faker->name;
        $price = $faker->randomFloat();
        $description = $faker->text;
        putJson('/api/products/1', ['name' => $name, 'price' => $price, 'description' => $description])->assertStatus(200);
        $product = \App\Models\Product::find(1);
        expect($name)->toBe($product->name)
            ->and($price)->toEqual($product->price)
            ->and($description)->toBe($product->description);
    });
});
