<?php

use Illuminate\Database\Seeder;
use App\Models\Provider;

class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Provider::create([
            'name' => 'best hotels',
        ]);
        Provider::create([
            'name' => 'top hotels'
        ]);
        
    }
}
