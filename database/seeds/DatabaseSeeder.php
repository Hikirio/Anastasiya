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
        factory(App\Depart::class, 1000)->create();
        factory(App\Main::class, 1000)->create();
        factory(App\Little::class, 1000)->create();
    }
}
