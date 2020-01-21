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
        $this->call(AmenitiesTableSeeder::class);
        $this->call(ProvidersTableSeeder::class);
        $this->call(HotelsTableSeeder::class);
        $this->call(HotelsRatesTableSeeder::class);
        $this->call(HotelsAmenitiesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
