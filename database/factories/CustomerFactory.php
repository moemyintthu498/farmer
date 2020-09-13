<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Customer;

$factory->define(Customer::class, function (Faker $faker) {
    return [
      'name' => $faker->sentence($nbWords = 3),
        'address'=>$faker->sentence($nbWords = 3),
        'phoneno' => '09-'.$faker->randomNumber($nbDigits = 9, $strict = true),
    ];
});
