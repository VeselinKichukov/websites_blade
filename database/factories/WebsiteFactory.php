<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Website;
use Faker\Generator as Faker;

$factory->define(Website::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'url' => $faker->url,
        'owner_id' => function () {
        return factory(App\User::class)->create()->id;
        }
    ];
});
