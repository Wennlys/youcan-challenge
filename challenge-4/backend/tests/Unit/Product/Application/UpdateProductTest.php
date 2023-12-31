<?php

use function Pest\Laravel\putJson;

describe('UpdateProduct', function () {
    it('updates a given product correctly', function () {
        $faker = Faker\Factory::create();
        putJson('/api/products/1', ['name' => $faker->name])->assertStatus(200);
    });
});
