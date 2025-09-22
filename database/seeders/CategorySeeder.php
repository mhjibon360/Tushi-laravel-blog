<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['category_name' => 'Programming', 'category_slug' => 'programming', 'created_at' => now()],
            ['category_name' => 'Web Development', 'category_slug' => 'web-development', 'created_at' => now()],
            ['category_name' => 'Mobile App Development', 'category_slug' => 'mobile-app-development', 'created_at' => now()],
            ['category_name' => 'Artificial Intelligence', 'category_slug' => 'artificial-intelligence', 'created_at' => now()],
            ['category_name' => 'Machine Learning', 'category_slug' => 'machine-learning', 'created_at' => now()],
            ['category_name' => 'Data Science', 'category_slug' => 'data-science', 'created_at' => now()],
            ['category_name' => 'Cyber Security', 'category_slug' => 'cyber-security', 'created_at' => now()],
            ['category_name' => 'Cloud Computing', 'category_slug' => 'cloud-computing', 'created_at' => now()],
            ['category_name' => 'DevOps', 'category_slug' => 'devops', 'created_at' => now()],
            ['category_name' => 'Blockchain', 'category_slug' => 'blockchain', 'created_at' => now()],
            ['category_name' => 'Internet of Things (IoT)', 'category_slug' => 'internet-of-things-iot', 'created_at' => now()],
            ['category_name' => 'UI/UX Design', 'category_slug' => 'ui-ux-design', 'created_at' => now()],
            ['category_name' => 'Software Testing', 'category_slug' => 'software-testing', 'created_at' => now()],
            ['category_name' => 'Game Development', 'category_slug' => 'game-development', 'created_at' => now()],
            ['category_name' => 'AR/VR Technology', 'category_slug' => 'ar-vr-technology', 'created_at' => now()],
            ['category_name' => 'Big Data', 'category_slug' => 'big-data', 'created_at' => now()],
            ['category_name' => 'Robotics', 'category_slug' => 'robotics', 'created_at' => now()],
            ['category_name' => 'Tech News', 'category_slug' => 'tech-news', 'created_at' => now()],
            ['category_name' => 'Gadgets Review', 'category_slug' => 'gadgets-review', 'created_at' => now()],
            ['category_name' => 'Startup & Innovation', 'category_slug' => 'startup-innovation', 'created_at' => now()],
        ]);
    }
}
