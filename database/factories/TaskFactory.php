<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'task'=>$this->faker->name, 
            'project_id'=> Project::all()->random()->id, 
            'activity_id'=> Activity::all()->random()->id,
            'user_id'=> User::all()->random()->id, 
            'enddate' => Carbon::createFromTimeStamp($this->faker->dateTimeBetween('now', '+30 days')->getTimestamp()),
            'begindate' => Carbon::createFromTimeStamp($this->faker->dateTimeBetween('now', '+0 days')->getTimestamp()),
        ];
    }
}
