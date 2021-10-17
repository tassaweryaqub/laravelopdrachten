<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Price; 

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Price::factory()
        ->times(10)
        ->create(); 
    }
}
