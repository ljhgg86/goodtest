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

$factory->define(App\Models\Gourmetinfo::class, function($faker){
	return[
		'zancounts' => $faker->randomDigit,
		'pay' => $faker->numberBetween($min = 10, $max = 1000),
		'opentime' => $faker->time($format = 'H:i:s', $max = '11:00:00'),
		'closetime' => $faker->time($format = 'H:i:s', $min = '14:00:00'),
		'topimg' => $faker->imageUrl($width = 640, $height = 480),
		'info' => $faker->randomHtml(1,2),
		'telphone' => $faker->e164PhoneNumber,
		'latitude' => $faker->latitude($min = 20, $max = 40),
        'longitude' => $faker->longitude($min = 100, $max = 120),
        //'point' => GeomFromText(Point($faker->longitude($min = 100, $max = 120),$faker->latitude($min = 20, $max = 40))),
		'address' => $faker->address,
		'gourmets_id' => function(){
			return factory(App\Models\Gourmets::class)->create()->id;
		}
	];
});
