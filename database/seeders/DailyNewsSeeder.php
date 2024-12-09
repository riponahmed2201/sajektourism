<?php

namespace Database\Seeders;

use App\Models\DailyNews;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DailyNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $dailyNews = [
            [
                'category_id' => 1,
                'title' => 'Hotel & Resort Booking',
                'slug' => 'hotel-resort-booking',
                'images' => 'assets/frontend/upload/news-posts/im12.jpg',
                'details' => 'Discover and book your perfect stay. Luxury hotels and resorts await!',
                'status' => 'active',
                'date' => $now,
                'is_featured' => true,
                'is_top' => true,
                'is_popular' => true,
                'is_breaking' => true,
                'view_count' => 1,
                'is_recent' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DailyNews::insert($dailyNews);
    }
}
