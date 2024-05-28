<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'name' => 'Book1',
            'photo' => fake()->imageUrl($width = 40, $height = 80), 
            'publication_date' => now(),
            'category_id' => 1,
            'prefer' => true,
            'author_name' => 'A1',
            'display_order' => 1,
            'content' => 'Physicians provide comprehensive medical evaluations and primary care for patients of all ages.'
        ]);
    }
}
