<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
/* een product behoort tot een category */
        public function category()
        {
            return $this->belongsTo(Category::class); 
        }

/* een product heeft meerdere prijzen */

    public function price()
    {
        return $this->hasMany(Price::class); 
    }

    public function latest_price()
    {
        return $this->hasOne(Price::class)->orderBy('effdate', 'desc'); 
    }

}
