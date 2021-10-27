<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Activity::factory()
        ->times(5)
        ->create(); 

 
        // DB::table('activities')->insert([
        //     'Todo' => Str::random(1),
        //     'Doing' =>  Str::random(2),
        //     'Testing' =>  Str::random(3),
        //     'Verify' => Str::random(4),
        //     'Done' =>  Str::random(5),

        // ]);
      
    }
}
