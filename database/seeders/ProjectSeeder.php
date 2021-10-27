<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\Project; 


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Project::factory()
        ->times(10)
    //   ->hasTask(2)
        ->create(); 
    
    }
}
