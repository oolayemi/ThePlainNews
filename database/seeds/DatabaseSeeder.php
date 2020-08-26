<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User', 15)->create()->each(function ($user){
            $user->posts()->save(factory('App\Post')->make());
        });

        factory('App\Tag', 15)->create();

        factory('App\Comment', 30)->create();
    }
}
