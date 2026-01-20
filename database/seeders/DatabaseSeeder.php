<?php

namespace Database\Seeders;

use App\Models\HomePage;
use App\Models\AboutSetting;
use App\Models\Setting;
use App\Models\Certificate;
use App\Models\MediaCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create HomePage settings (required for home page)
        if (!HomePage::find(1)) {
            DB::table('home_pages')->insert([
                'id' => 1,
                'slider1' => 'placeholder.jpg',
                'slider2' => 'placeholder.jpg',
                'title' => 'Welcome to EEI',
                'description' => 'Your trusted partner',
                'who_we_are_desc' => 'About our company',
                'services' => 'Our services description',
                'feature1_title' => 'Feature 1',
                'feature2_title' => 'Feature 2',
                'feature3_title' => 'Feature 3',
                'feature1_desc' => 'Description 1',
                'feature2_desc' => 'Description 2',
                'feature3_desc' => 'Description 3',
                'why_eei_desc' => 'Why choose EEI',
                'why_eei_points' => 'Point 1, Point 2, Point 3',
                'feature1_icon' => 'icon1.png',
                'feature2_icon' => 'icon2.png',
                'feature3_icon' => 'icon3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Create AboutSetting (required for about/contact pages)
        if (!AboutSetting::find(1)) {
            DB::table('about_settings')->insert([
                'id' => 1,
                'title' => 'About Us',
                'hero_image' => 'placeholder.jpg',
                'who_we_are' => 'About our company...',
                'our_message' => 'Our message...',
                'our_vision' => 'Our vision...',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Create Settings (required for site settings)
        if (!Setting::find(1)) {
            DB::table('settings')->insert([
                'id' => 1,
                'site-name' => 'EEI',
                'phone' => '+1234567890',
                'email' => 'info@eei.com',
                'address' => 'Your Address',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Create a media category first (for foreign key)
        if (!MediaCategory::find(1)) {
            DB::table('media_categories')->insert([
                'id' => 1,
                'title' => 'General',
                'description' => 'General category',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Create Certificate settings (requires media_category foreign key)
        if (!Certificate::find(1)) {
            DB::table('certificate_setting')->insert([
                'id' => 1,
                'title' => 'Our Certificates',
                'description' => 'Certificate description',
                'gallery' => 1, // References media_categories id
                'hero' => 'placeholder.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
