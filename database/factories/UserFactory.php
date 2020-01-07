<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Depart;
use App\Main;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Depart::class, function (Faker $faker) {
    return [
        'depart_number' => $faker->unique()->numberBetween(0,10),
        'name' => $faker->name,
        'dep_head' => $faker->name,
        'fin_responsible' => $faker->name,

    ];
});
$factory->define(Main::class, function (Faker $faker) {
        $q = Depart::all();
        foreach ($q as $e) {
            return [
                'depart' => $e->depart_number,
                'inv_num' => $faker->name,
                'name' => $faker->name,
                'accepted' => $faker->numberBetween(0, 20),
                'written_off' => $faker->numberBetween(0, 20),
                'cost' => $faker->numberBetween(0, 20),

            ];
        }
});
