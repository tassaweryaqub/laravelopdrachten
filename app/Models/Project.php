<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description']; 


    public function task()
    {
        return $this->hasMany(Task::class); 
    }

    /*
    * project heeft meerdere taken   
    */ 
    public function latest_task()
    {
        return $this->hasOne(Task::class)->orderBy('task', 'desc'); 
    }
    
}
