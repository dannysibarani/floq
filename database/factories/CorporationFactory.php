<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

use App\Models\Corporation; 

$factory->define(Corporation::class, function (Faker $faker) {
    return [
		'name' => $faker->unique()->name
    ];
});
