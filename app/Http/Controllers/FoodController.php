<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function foodIndex(Request $request)
    {
        $validated = $request->validate([
            'search'   => 'nullable|string|max:100',
            'category' => 'nullable|integer|exists:categories,id',
            'sort'     => 'nullable|string|in:popular,random',
        ]);
        $categories = \App\Models\Category::all();

        $foods = Food::with(['restourant', 'category'])
            ->when($request->search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%");
            })
            ->when($request->category, function ($query, $categoryId) {
                return $query->where('category_id', $categoryId);
            })
            ->when($request->sort, function ($query, $sort) {
                if ($sort === 'popular') {
                    return $query->orderBy('like_count', 'desc');
                }
                if ($sort === 'random') {
                    return $query->inRandomOrder();
                }
            })
            ->paginate(16)
            ->withQueryString();

        return view("foods.index", compact('foods', 'categories'));
    }
    public function foodShow($id)
    {
        $food = Food::with(['restourant', 'category'])->findOrFail($id);
        return view("foods.show", compact('food'));
    }
}
