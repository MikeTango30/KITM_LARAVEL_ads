<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Listing;
use Bezhanov\Faker\Provider\Commerce;
use Faker\Generator as Faker;
use Faker\Factory as FakerFactory;

$factory->define(Listing::class, function (Faker $faker) {
    $fakerLT = FakerFactory::create('lt_LT');
    $faker->addProvider(new Commerce($faker));

    return [
        'category_id' => $faker->numberBetween(1, 10),
        'img' => "images/qjYksngMOGhrPqGAXBqD6QhAhaOgzTIYgnbmPSIV.jpeg",
        'listing_title' => $faker->productName,
        'location' => $fakerLT->city,
        'rating' => $faker->numberBetween(1, 5),
        'description' => $fakerLT->paragraph($nbSentences = 3, $variableNbSentences = true),
        'price' => $faker->randomFloat(2, 4, 50),
        'email' => $fakerLT->email,
        'phone' => $fakerLT->phoneNumber
    ];
});
