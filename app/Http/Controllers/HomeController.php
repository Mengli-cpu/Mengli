<?php

namespace App\Http\Controllers;

use App\Models\Restourant;
use App\Models\Food;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class HomeController extends Controller
{
    public function home()
    {
        $restaurants = Restourant::inRandomOrder()->take(4)->get();
        $foods = Food::inRandomOrder()->take(4)->get();
        return view("home.index", compact('restaurants','foods'));
    }
}
