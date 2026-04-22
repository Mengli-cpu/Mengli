<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);
Route::get('/foods', [App\Http\Controllers\FoodController::class, 'foodIndex'])->name('foods');
Route::get('/restaurants', [App\Http\Controllers\RestaurantController::class, 'restaurantIndex'])->name('restaurants');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'categoryIndex'])->name('categories');
Route::get('/foods/show/{id}', [App\Http\Controllers\FoodController::class, 'foodShow'])->name('foods');
Route::get('/restaurants/show/{id}', [App\Http\Controllers\RestaurantController::class, 'restaurantShow'])->name('restaurants');

