<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
      'name'=> $faker -> name,
      'model'=> $faker -> word,
      'kW'=> $faker -> numberBetween(1,20),
    ];
});
