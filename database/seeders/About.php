<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class About extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 												
        DB::table('abouts')->insert([
            'title' => 'About Us',
            'icon' => '',
            'heading' => 'About Us',
            'image' => '',
            'big_heading' => 'Tushi is a media network that builds and operates.
',
            'details' => 'We do this with the aim of creating the future of media. The future of media is one that is disruptive, agile, and credible. It embraces diversity, creates a positive impact, and leaves its audience in a better place than where they were before. We advocate for a media that embraces this and we embody.

',

            'story_icon' => '',
            'story_heading' => 'Our Story',
            'story_details_left' => 'The truth is important to us, so our work must always be trustworthy and demonstrate integrity. We push ourselves to move fast and not be afraid to change things up.',
            'story_details_right' => 'Our work must positively impact the lives. We come from different backgrounds and are varied in our thoughts and beliefs. We respect diversity and our work reflects that.
',
            'short' => 'We actively encourage fresh ideas and creative ways of doing things better.',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
