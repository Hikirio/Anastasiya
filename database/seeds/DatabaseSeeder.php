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
        $start_time = microtime(true);

        factory(App\Depart::class, 100000)->create();
//        factory(App\Main::class, 100000)->create();
//        factory(App\Little::class, 100000)->create();
        echo 'Время выполнения запроса: ' . round(microtime(true) - $start_time, 4) . ' сек,'.'</br>' ;
    }
}
