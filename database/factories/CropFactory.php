<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Crop;

$factory->define(Model::class, function (Faker $faker) {
    return [
      'name' => $faker->sentence($nbWords = 3),
      
      'photo' => 'backend/cropimg/' . $faker->image('public/backend/cropimg',400,300, null, false),

      'description' => $faker->sentence($nbWords = 3),
      'soil' => $faker->sentence($nbWords = 3),
      'season' => $faker->sentence($nbWords = 3),
      'rainfall' => $faker->sentence($nbWords = 3),
      'insect' => $faker->sentence($nbWords = 3),
    ];
});
