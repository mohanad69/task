<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Hotel;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 3; $i++) {
            Hotel::create([
                'name'        => $faker->word,
                'city'        => 'CAI',
                'fare'        => 1000,
                'provider_id' => 1,
                'from_date'        => $faker->date,
                'to_date'        => $faker->date,
                'adults'        => $faker->numberBetween(1,10),

            ]);
        }
        for ($i = 0; $i < 3; $i++) {
            Hotel::create([
                'name'        => $faker->word,
                'city'        => 'ESF',
                'fare'        => 1000,
                'provider_id' => 1,
                'from_date'        => $faker->date,
                'to_date'        => $faker->date,
                'adults'        => $faker->numberBetween(1,10),

            ]);
        }
        for ($i = 0; $i < 3; $i++) {
            Hotel::create([
                'name'        => $faker->word,
                'city'        => 'CAI',
                'fare'        => 1000,
                'provider_id' => 2,
                'from_date'        => $faker->date,
                'to_date'        => $faker->date,
                'adults'        => $faker->numberBetween(1,10),

            ]);
        }
        for ($i = 0; $i < 3; $i++) {
            Hotel::create([
                'name'        => $faker->word,
                'city'        => 'ESF',
                'fare'        => 1000,
                'provider_id' => 2,
                'from_date'        => $faker->date,
                'to_date'        => $faker->date,
                'adults'        => $faker->numberBetween(1,10),

            ]);
        }
    }
}
