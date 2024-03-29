<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$faker = Faker\Factory::create('zh_CN');

$factory->define(App\Models\Gourmets::class, function($faker) {
	return[
		'title' => $faker->company,
	];
});
