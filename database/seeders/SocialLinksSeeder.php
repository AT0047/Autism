<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('social_links')->insert([
            [
                'platform' => 'facebook',
                'link' => 'https://www.facebook.com/', 
                'created_at' => now(),
                'updated_at' =>  now(),
            ],
            [
                'platform' => 'twitter',
                'link' => 'https://twitter.com', 
                'created_at' => now(),
                'updated_at' =>  now(),
            ],
            [
                'platform' => 'linkedin',
                'link' => 'https://www.linkedin.com', 
                'created_at' => now(),
                'updated_at' =>  now(),
            ],
            [
                'platform' => 'youtube',
                'link' => 'https://www.youtube.com/', 
                'created_at' => now(),
                'updated_at' =>  now(),
            ],
            ]);
    }
}
