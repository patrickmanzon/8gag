<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Section;
use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(User::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'name' => $name,
        'screen_name' => implode('_', explode(' ',$name)),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Section::class, function (Faker $faker) {
    return [
        'name' => $faker->word(1),
        'description' => $faker->sentence
    ];
});

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory('App\User')->create()->id;
        },
        'title' => $faker->sentence,
        'image' => 'https://source.unsplash.com/random/1280x960',
        'section_id' => rand(1, Section::count())
    ];
});