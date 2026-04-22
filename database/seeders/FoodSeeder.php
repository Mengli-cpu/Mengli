<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foods = [
            [
                'category_id' => 9,
                'restaurant_id' => 1,
                'name' => 'Merjimek',
                'price' => 30.00,
                'code' => '41qz4c56',
                'like_count' => 3006,
                'type' => 'meal',
            ],
            [
                'category_id' => 6,
                'restaurant_id' => 1,
                'name' => 'Juice',
                'price' => 10.00,
                'code' => '21wz4d52',
                'like_count' => 3067,
                'type' => 'drink',
            ],
        ];

        foreach ($foods as $i) {
            \App\Models\Food::create([
                'category_id' => $i['category_id'],
                'restaurant_id' => $i['restaurant_id'],
                'name' => $i['name'],
                'price' => $i['price'],
                'code' => $i['code'],
                'like_count' => $i['like_count'],
                'type' => $i['like_count'],
            ]);
        }
    }
}
