<?php

use function Pest\Laravel\putJson;

it('updates a given category correctly', function () {
    $faker = Faker\Factory::create();
    $name = $faker->name;
    $result = putJson('/api/categories/1', ['name' => $name])->assertStatus(200);
    expect($name)->toBe(\App\Models\Category::find(1)->name);
});
