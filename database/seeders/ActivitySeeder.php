<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Task;
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
    
        $activity = Activity::factory()->create([
            'name' => 'Todo',

        ]); 
        
        $activity = Activity::factory()->create([
            'name' =>  'Doing', 
        ]); 

        $activity = Activity::factory()->create([
            'name' =>  'Testing', 
        ]); 

        $activity = Activity::factory()->create([
            'name' =>  'Verify', 
        ]); 
      
        $activity = Activity::factory()->create([
            'name' =>  'Done', 
        ]); 
      
        //! deze alleen gebruiken bij factory om random 5 te genereren bijvoorbeeld
        // Activity::factory()
        // ->times(5)
        // ->create(); 
      
    }
}
