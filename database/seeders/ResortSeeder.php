<?php

namespace Database\Seeders;

use App\Models\Resort;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $resorts = [
            [
                'title' => 'Abakash Emmanuel Eco Resort',
                'short_description' => 'Abakash Emmanuel Eco Resort offers a serene, nature-filled escape with eco-friendly amenities.',
                'details' => 'Abakash Emmanuel Eco Resort offers a serene, nature-filled escape with eco-friendly amenities.',
                'thumbnail' => 'Abakash Emmanuel Eco Resort.jpg',
                'album' => 'Abakash Emmanuel Eco Resort.jpg',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Sajek Eco Valley Resort',
                'short_description' => 'Sajek Eco Valley Resort offers a tranquil stay amidst the breathtaking beauty of Sajek.',
                'details' => 'Sajek Eco Valley Resort offers a tranquil stay amidst the breathtaking beauty of Sajek.',
                'thumbnail' => 'Sajek Eco Valley Resort.jpg',
                'album' => 'Sajek Eco Valley Resort.jpg',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Meghchut Resort',
                'short_description' => 'Meghchut Resort promises a cozy retreat above the clouds in Sajek.',
                'details' => 'Meghchut Resort promises a cozy retreat above the clouds in Sajek.',
                'thumbnail' => 'Meghchut Resort.jpg',
                'album' => 'Meghchut Resort.jpg',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Cloud Paradise Resort Sajek',
                'short_description' => 'Cloud Paradise Resort offers a heavenly escape amidst Sajeks scenic beauty.',
                'details' => 'Cloud Paradise Resort offers a heavenly escape amidst Sajeks scenic beauty.',
                'thumbnail' => 'Cloud Paradise Resort Sajek.jpg',
                'album' => 'Cloud Paradise Resort Sajek.jpg',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Niribili Resort Sajek',
                'short_description' => 'Niribili Resort offers a peaceful retreat amidst Sajeks natural beauty.',
                'details' => 'Niribili Resort offers a peaceful retreat amidst Sajeks natural beauty.',
                'thumbnail' => 'Niribili Resort Sajek.jpg',
                'album' => 'Niribili Resort Sajek.jpg',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        Resort::query()->insert($resorts);
    }
}
