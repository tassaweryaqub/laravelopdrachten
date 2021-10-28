<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;



    /* een taak behoort tot een project*/ 
    public function project()
    {
        return $this->belongsTo(Project::class); 
    }

    /* een taak behoort tot een user*/ 
    public function user()
    {
        return $this->belongsTo(User::class); 
    }
    
    /* een taak behoort tot een activity*/ 

    public function activity()
    {
        return $this->belongsTo(Activity::class); 
    }

}
