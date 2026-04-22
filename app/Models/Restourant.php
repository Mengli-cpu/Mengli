<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restourant extends Model
{
    public function foods()
    {
        return $this->hasMany(Food::class, 'restaurant_id');
    }
}
