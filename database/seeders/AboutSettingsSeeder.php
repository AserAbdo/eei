<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about_settings')->insert([
            'hero_title' => 'Welcome to Our Company',
            'hero_description' => 'We are committed to delivering excellence in everything we do.',
            'hero_image' => 'hero-image.jpg',
            'who_we_are' => 'We are a team of dedicated professionals.',
            'who_we_are_image' => 'who-we-are-image.jpg',
            'our_message' => 'We value innovation and customer satisfaction above all.',
            'our_message_image' => 'our-message-image.jpg',
            'our_vision' => 'To be the leading company in our industry, known for quality and reliability.',
            'our_vision_image' => 'our-vision-image.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
