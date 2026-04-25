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
            [
                'category_id' => 9,
                'restaurant_id' => 18,
                'name' => 'Omlet',
                'price' => 10.00,
                'code' => '21wz6d52',
                'like_count' => 3097,
                'type' => 'meal',
            ],
            [
                'category_id' => 11,
                'restaurant_id' => 6,
                'name' => 'Limonad',
                'price' => 10.00,
                'code' => '26wz4d52',
                'like_count' => 3067,
                'type' => 'drink',
            ],
            [
                'category_id' => 12,
                'restaurant_id' => 7,
                'name' => 'Chay and Coffee',
                'price' => 10.00,
                'code' => '26er4d52',
                'like_count' => 4007,
                'type' => 'drink',
            ],
            [
                'category_id' => 1,
                'restaurant_id' => 9,
                'name' => 'Palaw',
                'price' => 15.00,
                'code' => '36er4d52',
                'like_count' => 5007,
                'type' => 'meal',
            ],
            [
                'category_id' => 1,
                'restaurant_id' => 10,
                'name' => 'Dograma',
                'price' => 15.00,
                'code' => '36er4u52',
                'like_count' => 5057,
                'type' => 'meal',
            ],
            [
                'category_id' => 8,
                'restaurant_id' => 17,
                'name' => 'Ishdaachar',
                'price' => 15.00,
                'code' => '35yr4u52',
                'like_count' => 2057,
                'type' => 'meal',
            ],
            [
                'category_id' => 8,
                'restaurant_id' => 12,
                'name' => 'Oliwye',
                'price' => 25.00,
                'code' => '35yr4i92',
                'like_count' => 2057,
                'type' => 'meal',
            ],
            [
                'category_id' => 8,
                'restaurant_id' => 2,
                'name' => 'Okroshka',
                'price' => 15.00,
                'code' => '56ir4i92',
                'like_count' => 2357,
                'type' => 'meal',
            ],
            [
                'category_id' => 11,
                'restaurant_id' => 2,
                'name' => 'Kokteyl',
                'price' => 15.00,
                'code' => '56ib7p92',
                'like_count' => 2157,
                'type' => 'drink',
            ],
            [
                'category_id' => 14,
                'restaurant_id' => 2,
                'name' => 'Kakmach',
                'price' => 15.00,
                'code' => '13ib7p92',
                'like_count' => 2157,
                'type' => 'meal',
            ],
            [
                'category_id' => 11,
                'restaurant_id' => 2,
                'name' => 'Gazly ichgiler',
                'price' => 15.00,
                'code' => '13ib7p92',
                'like_count' => 2157,
                'type' => 'drink',
            ],
            [
                'category_id' => 3,
                'restaurant_id' => 3,
                'name' => 'Pizza',
                'price' => 15.00,
                'code' => '13ij7p92',
                'like_count' => 2157,
                'type' => 'meal',
            ],
            [
                'category_id' => 7,
                'restaurant_id' => 4,
                'name' => 'Dolama',
                'price' => 15.00,
                'code' => '13i0kp92',
                'like_count' => 2157,
                'type' => 'meal',
            ],
        ];

        foreach ($foods as $fs) {
            \App\Models\Food::create([
                'category_id' => $fs['category_id'],
                'restaurant_id' => $fs['restaurant_id'],
                'name' => $fs['name'],
                'price' => $fs['price'],
                'code' => $fs['code'],
                'like_count' => $fs['like_count'],
                'type' => $fs['like_count'],
            ]);
        }
    }
}
