<?php

namespace Database\Seeders;

use App\Models\Youtube;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YoutubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $youtubes = [
            [
                'title' => 'Sajek Valley (সাজেক ভ্যালী) Sajek Eco Valley Resort.',
                'slug' => 'sajek-valley-সাজেক-ভ্যালী-sajek-eco-valley-resort',
                'link' => '<iframe width="853" height="480" src="https://www.youtube.com/embed/VqBtiEcjiXc?list=PLjyBiLhEdW5iihDG-LjTmfOT3RVU7N8f4" title="Sajek Valley (সাজেক ভ্যালী) Sajek Eco Valley Resort.  Booking No: 01625795753" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        Youtube::query()->insert($youtubes);
    }
}
