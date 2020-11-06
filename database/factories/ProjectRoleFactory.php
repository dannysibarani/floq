<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

use App\Models\ProjectRole; 
use App\Models\Project; 


$factory->define(ProjectRole::class, function (Faker $faker) {
    return [
    	'project_id' => factory(Project::class)->create()->id, 
    	'name' => $faker->unique()->name, 
    	'description' => $faker->unique()->name, 
    ];
});
