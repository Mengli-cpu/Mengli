<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'National Food',
            'Fast Food',
            'Pizza',
            'Sushi',
            'Kebab & Grill',
            'Steaks',
            'Soups',
            'Salads',
            'Breakfast',
            'Desserts',
            'Drinks',
            'Coffee & Tea',
            'Healthy Food',
            'Hot meals',
            'Others',
        ];


        foreach ($categories as $cs) {
            \App\Models\Category::create([
                'name' => $cs
            ]);
        }
    }
}
