<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->numberBetween(30,200),
        'sale_price' => $faker->numberBetween(15,130),
        'category' => $faker->randomElement(['mens', 'womens', 'children']),
        'stock_amount' => $faker->numberBetween(0, 20),
       	'new_product' => $faker->boolean,
        'recommended' => $faker->boolean,
    ];
});
