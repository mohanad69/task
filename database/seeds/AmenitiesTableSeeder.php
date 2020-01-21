<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Amenity;

class AmenitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 5; $i++) {
            Amenity::create([
                'name' => $faker->word
            ]);
        }
    }
}
