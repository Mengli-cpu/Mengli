<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestourantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [
                'name' => 'Hezzet',
                'address' => 'Ashgabat',
                'rating' => 4.8,
                'phone_num' => '+99323240234',
            ],
            [
                'name' => 'Katmer Premium',
                'address' => 'Ashgabat',
                'rating' => 4.9,
                'phone_num' => '+99323440234',
            ],
            [
                'name' => 'Altyn Chayhana',
                'address' => 'Ashgabat',
                'rating' => 4.8,
                'phone_num' => '+99323240294',
            ],
            [
                'name' => 'Sushihouse.tm',
                'address' => 'Ashgabat',
                'rating' => 4.8,
                'phone_num' => '+99343240234',
            ],
            [
                'name' => 'Lezzetli',
                'address' => 'Ashgabat',
                'rating' => 3.5,
                'phone_num' => '+99333240034',
            ],
            [
                'name' => 'Rahat Brasserie',
                'address' => 'Ashgabat',
                'rating' => 4.2,
                'phone_num' => '+99333040034',
            ],
            [
                'name' => 'My Sushi',
                'address' => 'Ashgabat',
                'rating' => 4.5,
                'phone_num' => '+99333240094',
            ],
            [
                'name' => 'Bronze Restaurant',
                'address' => 'Ashgabat',
                'rating' => 4.6,
                'phone_num' => '+99333240014',
            ],
            [
                'name' => 'Altyn Chayhana Gulzemin',
                'address' => 'Ashgabat',
                'rating' => 4.6,
                'phone_num' => '+99333240814',
            ],
            [
                'name' => 'Lezzetli',
                'address' => 'Ashgabat',
                'rating' => 4.6,
                'phone_num' => '+99333246014',
            ],
            [
                'name' => 'Kebapchy',
                'address' => 'Ashgabat',
                'rating' => 4.4,
                'phone_num' => '+99333240214',
            ],
            [
                'name' => 'Premium Pizza',
                'address' => 'Ashgabat',
                'rating' => 4.4,
                'phone_num' => '+99323240214',
            ],
            [
                'name' => 'Selim Han Restoran',
                'address' => 'Ashgabat',
                'rating' => 4.2,
                'phone_num' => '+99323243214',
            ],
            [
                'name' => 'Kejebe',
                'address' => 'Ashgabat',
                'rating' => 4.5,
                'phone_num' => '+99323243514',
            ],
            [
                'name' => 'Ayperi',
                'address' => 'Ashgabat',
                'rating' => 4.9,
                'phone_num' => '+99324243214',
            ],
            [
                'name' => 'Sha kofe',
                'address' => 'Ashgabat',
                'rating' => 4.3,
                'phone_num' => '+99324543214',
            ],
            [
                'name' => 'Zefir TM',
                'address' => 'Ashgabat',
                'rating' => 4.3,
                'phone_num' => '+99354543214',
            ],
            [
                'name' => 'Shabaz',
                'address' => 'Ashgabat',
                'rating' => 4.4,
                'phone_num' => '+99324543264',
            ],
            // [
            //     'name' => 'Naomi Sushi',
            //     'address' => 'Ashgabat',
            //     'rating' => 4.1,
            //     'phone_num' => '+99324544264',
            // ],
            // [
            //     'name' => 'Chorekchi',
            //     'address' => 'Ashgabat',
            //     'rating' => 4.3,
            //     'phone_num' => '+99327544264',
            // ],
            // [
            //     'name' => 'Melhem koz doner',
            //     'address' => 'Ashgabat',
            //     'rating' => 4.3,
            //     'phone_num' => '+99327544264',
            // ],
            // [
            //     'name' => 'Pizza 88',
            //     'address' => 'Ashgabat',
            //     'rating' => 4.3,
            //     'phone_num' => '+99327544264',
            // ],
        ];

        foreach ($restaurants as $rs) {
            \App\Models\Restourant::create([
                'name' => $rs['name'],
                'address' => $rs['address'],
                'rating' => $rs['rating'],
                'phone_num' => $rs['phone_num'],
            ]);
        }
    }
}
