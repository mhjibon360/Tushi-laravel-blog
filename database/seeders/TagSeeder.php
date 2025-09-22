<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['tag_name' => 'Laravel', 'tag_slug' => 'laravel', 'created_at' => now()],
            ['tag_name' => 'PHP', 'tag_slug' => 'php', 'created_at' => now()],
            ['tag_name' => 'JavaScript', 'tag_slug' => 'javascript', 'created_at' => now()],
            ['tag_name' => 'ReactJS', 'tag_slug' => 'reactjs', 'created_at' => now()],
            ['tag_name' => 'VueJS', 'tag_slug' => 'vuejs', 'created_at' => now()],
            ['tag_name' => 'NodeJS', 'tag_slug' => 'nodejs', 'created_at' => now()],
            ['tag_name' => 'API Development', 'tag_slug' => 'api-development', 'created_at' => now()],
            ['tag_name' => 'REST API', 'tag_slug' => 'rest-api', 'created_at' => now()],
            ['tag_name' => 'AI Tools', 'tag_slug' => 'ai-tools', 'created_at' => now()],
            ['tag_name' => 'Machine Learning Models', 'tag_slug' => 'machine-learning-models', 'created_at' => now()],
            ['tag_name' => 'Data Analysis', 'tag_slug' => 'data-analysis', 'created_at' => now()],
            ['tag_name' => 'Cyber Security Tips', 'tag_slug' => 'cyber-security-tips', 'created_at' => now()],
            ['tag_name' => 'Cloud Services', 'tag_slug' => 'cloud-services', 'created_at' => now()],
            ['tag_name' => 'AWS', 'tag_slug' => 'aws', 'created_at' => now()],
            ['tag_name' => 'Blockchain Technology', 'tag_slug' => 'blockchain-technology', 'created_at' => now()],
            ['tag_name' => 'UI Design', 'tag_slug' => 'ui-design', 'created_at' => now()],
            ['tag_name' => 'Software Testing Tools', 'tag_slug' => 'software-testing-tools', 'created_at' => now()],
            ['tag_name' => 'Game Engine', 'tag_slug' => 'game-engine', 'created_at' => now()],
            ['tag_name' => 'Tech Startup', 'tag_slug' => 'tech-startup', 'created_at' => now()],
            ['tag_name' => 'Gadget News', 'tag_slug' => 'gadget-news', 'created_at' => now()],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
