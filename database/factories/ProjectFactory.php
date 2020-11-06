<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
		'date_prepared' => now(), 
		'name' => $faker->unique()->name, 
		'project_title' => Str::random(120), 
    ];
});
