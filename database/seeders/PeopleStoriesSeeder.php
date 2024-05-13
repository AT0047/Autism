<?php

namespace Database\Seeders;

use App\Models\PeopleStory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleStoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PeopleStory::create([
            'name' => 'aaaaa',
            'jobs' => 'aaaaaaa',
            'title' => 'Primary Care',
            'photo' => fake()->imageUrl($width = 40, $height = 80), 
            'content' => 'Physicians provide comprehensive medical evaluations and primary care for patients of all ages.'
        ]);
    }
}
