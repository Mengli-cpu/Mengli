<?php

namespace App\Models;

use App\Models\Restourant;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Food extends Model
{
    use HasFactory;
    public function restourant()
    {
        return $this->belongsTo(Restourant::class, 'restaurant_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
}
