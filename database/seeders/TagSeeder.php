<?php

namespace Database\Seeders;

use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $news = [
            [
                'title' => 'News',
                'slug' => 'news',
                'details' => 'This is news tag',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Fashion',
                'slug' => 'fashion',
                'details' => 'This is fashion tag',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Politics',
                'slug' => 'politics',
                'details' => 'This is politics tag',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Sport',
                'slug' => 'sport',
                'details' => 'This is sport tag',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Food',
                'slug' => 'food',
                'details' => 'This is food tag',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Videos',
                'slug' => 'videos',
                'details' => 'This is videos tag',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Business',
                'slug' => 'business',
                'details' => 'This is business tag',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Travel',
                'slug' => 'travel',
                'details' => 'This is travel tag',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'World',
                'slug' => 'world',
                'details' => 'This is world tag',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Music',
                'slug' => 'music',
                'details' => 'This is music tag',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        Tag::query()->insert($news);
    }
}
