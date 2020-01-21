<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\User;

class UsersTableSeeder extends Seeder
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
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'email_verified_at' => $faker->dateTime,
                'password' => $faker->password,
                'remember_token' => $faker->md5
            ]);
        }
    }
}
