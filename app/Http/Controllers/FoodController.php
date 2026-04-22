<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function foodIndex()
    {
        $foods = Food::with(['restourant', 'category'])->paginate(24);
        return view("foods.index", compact('foods'));
    }

    public function foodShow($id)
    {
        $food = Food::with(['restourant', 'category'])->findOrFail($id);
        return view("foods.show", compact('food'));
        
    }
}
