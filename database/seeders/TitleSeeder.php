<?php

namespace Database\Seeders;

use App\Models\Title;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Title::create([
            'title' => 'Autism&ME Training to transform children’s lives',
            'place' => 'home',
            'photo' => fake()->imageUrl($width = 640, $height = 480), 
            'created_at' => now(),
            'updated_at' =>  now(),
        ]);
        Title::create([
            'title' => 'Unlimited Advice & Resource ',
            'place' => 'articles',
            'description' => 'That necessitates a robust ecommerce platform that optimizes your store & products',
            'photo' => fake()->imageUrl($width = 640, $height = 480), 
            'created_at' => now(),
            'updated_at' =>  now(),
        ]);
    }
}
