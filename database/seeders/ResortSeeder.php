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
                'slug' => 'abakash-emmanuel-eco-resort',
                'short_description' => 'Abakash Emmanuel Eco Resort offers a serene, nature-filled escape with eco-friendly amenities.',
                'details' => 'Abakash Emmanuel Eco Resort offers a serene, nature-filled escape with eco-friendly amenities.',
                'thumbnail' => 'Abakash Emmanuel Eco Resort.jpg',
                'images' => 'Abakash Emmanuel Eco Resort.jpg',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Sajek Eco Valley Resort',
                'slug' => 'sajek-eco-valley-resort',
                'short_description' => 'Sajek Eco Valley Resort offers a tranquil stay amidst the breathtaking beauty of Sajek.',
                'details' => 'Sajek Eco Valley Resort offers a tranquil stay amidst the breathtaking beauty of Sajek.',
                'thumbnail' => 'Sajek Eco Valley Resort.jpg',
                'images' => 'Sajek Eco Valley Resort.jpg',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Meghchut Resort',
                'slug' => 'meghchut-resort',
                'short_description' => 'Meghchut Resort promises a cozy retreat above the clouds in Sajek.',
                'details' => 'Meghchut Resort promises a cozy retreat above the clouds in Sajek.',
                'thumbnail' => 'Meghchut Resort.jpg',
                'images' => 'Meghchut Resort.jpg',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Cloud Paradise Resort Sajek',
                'slug' => 'cloud-paradise-resort-sajek',
                'short_description' => 'Cloud Paradise Resort offers a heavenly escape amidst Sajeks scenic beauty.',
                'details' => 'Cloud Paradise Resort offers a heavenly escape amidst Sajeks scenic beauty.',
                'thumbnail' => 'Cloud Paradise Resort Sajek.jpg',
                'images' => 'Cloud Paradise Resort Sajek.jpg',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Niribili Resort Sajek',
                'slug' => 'niribili-resort-sajek',
                'short_description' => 'Niribili Resort offers a peaceful retreat amidst Sajeks natural beauty.',
                'details' => 'Niribili Resort offers a peaceful retreat amidst Sajeks natural beauty.',
                'thumbnail' => 'Niribili Resort Sajek.jpg',
                'images' => 'Niribili Resort Sajek.jpg',
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
