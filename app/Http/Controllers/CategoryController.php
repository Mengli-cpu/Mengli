<?php

namespace App\Http\Controllers;

use \App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryIndex()
    {
        $categories = Category::with('food')->get();
        return view("categories.index", compact('categories'));
    }
}
