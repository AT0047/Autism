<?php

namespace Database\Seeders;

use App\Models\OurService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OurService::create([
            'title' => 'Primary Care',
            'photo' => fake()->imageUrl($width = 40, $height = 80), 
            'description' => 'Physicians provide comprehensive medical evaluations and primary care for patients of all ages.'
        ]);
    }
}
