<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $newsCategories = [
            [
                'title' => 'News',
                'slug' => 'news',
                'details' => 'This is news news categories',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Fashion',
                'slug' => 'fashion',
                'details' => 'This is fashion news categories',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Politics',
                'slug' => 'politics',
                'details' => 'This is politics news categories',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Sport',
                'slug' => 'sport',
                'details' => 'This is sport news categories',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Food',
                'slug' => 'food',
                'details' => 'This is food news categories',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Videos',
                'slug' => 'videos',
                'details' => 'This is videos news categories',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Business',
                'slug' => 'business',
                'details' => 'This is business news categories',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Travel',
                'slug' => 'travel',
                'details' => 'This is travel news categories',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'World',
                'slug' => 'world',
                'details' => 'This is world news categories',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Music',
                'slug' => 'music',
                'details' => 'This is music news categories',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        Category::query()->insert($newsCategories);
    }
}
