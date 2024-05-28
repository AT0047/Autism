<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Heavy Metal & Environmental toxins',
            'photo' => fake()->imageUrl(), 
        ]);
        Category::create([
            'name' => 'Genes & Detoxifications',
            'photo' => fake()->imageUrl(), 
        ]);
        Category::create([
            'name' => 'Mitochondrial Dysfunctions',
            'photo' => fake()->imageUrl(), 
        ]);
        Category::create([
            'name' => 'Immune Dysregulations ',
            'photo' => fake()->imageUrl(), 
        ]);
        Category::create([
            'name' => 'Microbiome',
            'photo' => fake()->imageUrl(), 
        ]);
    }
}
