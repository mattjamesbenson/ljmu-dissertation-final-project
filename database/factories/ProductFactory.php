<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->numberBetween(30,200),
        'category' => $faker->randomElement(['Mens', 'Womens', 'Childens']),
        'stock_amount' => $faker->numberBetween(0, 20),
        'sale' => $faker->boolean,
        'recommended' => $faker->boolean,
    ];
});
