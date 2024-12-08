<?php

namespace Database\Seeders;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $services = [
            [
                'title' => 'Hotel & Resort Booking',
                'slug' => 'hotel-resort-booking',
                'image' => 'assets/frontend/upload/news-posts/im12.jpg',
                'details' => 'Discover and book your perfect stay. Luxury hotels and resorts await!',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Corporate Tour Package',
                'slug' => 'corporate-tour-package',
                'image' => 'assets/frontend/upload/news-posts/im13.jpg',
                'details' => 'Custom corporate tour packages for your business needs.',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Groups Tour Package',
                'slug' => 'groups-tour-package',
                'image' => 'assets/frontend/upload/news-posts/im14.jpg',
                'details' => 'Exciting group tour packages for unforgettable adventures',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Family Tour Package',
                'slug' => 'family-tour-package',
                'image' => 'assets/frontend/upload/news-posts/im15.jpg',
                'details' => 'Specialized family tour packages for memorable experiences.',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Customize Tour Package',
                'slug' => 'customize-tour-package',
                'image' => 'assets/frontend/upload/news-posts/im8.jpg',
                'details' => 'Create your perfect trip with our customizable tour packages.',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Bus Ticket',
                'slug' => 'bus-ticket',
                'image' => 'assets/frontend/upload/news-posts/im9.jpg',
                'details' => 'Book your bus tickets easily for a comfortable journey.',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Jeep Booking',
                'slug' => 'jeep-booking',
                'image' => 'assets/frontend/upload/news-posts/im19.jpg',
                'details' => 'Book a jeep for your next adventure or trip.',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'CNG Booking',
                'slug' => 'cng-booking',
                'image' => 'assets/frontend/upload/news-posts/im17.jpg',
                'details' => 'Book a CNG for a convenient and affordable ride.',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Food Order',
                'slug' => 'food-order',
                'image' => 'assets/frontend/upload/news-posts/im18.jpg',
                'details' => 'Order delicious food delivered to your doorstep.',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Live Music Organized',
                'slug' => 'live-music-organized',
                'image' => 'assets/frontend/upload/news-posts/im20.jpg',
                'details' => 'Enjoy unforgettable experiences with our live music events.',
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ];

        Service::query()->insert($services);
    }
}
