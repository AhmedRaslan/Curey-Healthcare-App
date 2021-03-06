<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Doctor;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Doctor::class, function (Faker $faker) {
    $callup = $faker->numberBetween($min = 0, $max = 1);
    return [
        'qualifications' => $faker->catchPhrase,
        'address' => $faker->address,
        'duration' => $faker->numberBetween($min = 10, $max = 60),
        'offers_callup' => $callup,
        'fees' => $faker->numberBetween($min = 100, $max = 500),
        'callup_fees' => $callup == 0 ? null : $faker->numberBetween($min = 100, $max = 500),
        'benefit' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0.1, $max = 0.25),
        'cu_benefit' => $faker->numberBetween($min = 0, $max = 1),
        'created_at' => now(),
        'updated_at' => now()
    ];
});


