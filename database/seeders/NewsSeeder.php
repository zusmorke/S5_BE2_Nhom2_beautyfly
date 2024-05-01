<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'title' => 'Tiêu đề tin tức 1',
                'image_url' => 'https://example.com/image1.jpg',
                'description' => 'Mô tả ngắn về tin tức 1',
                'content' => 'Nội dung chi tiết của tin tức 1',
                'posted_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'title' => 'Tiêu đề tin tức 2',
                'image_url' => 'https://example.com/image2.jpg',
                'description' => 'Mô tả ngắn về tin tức 2',
                'content' => 'Nội dung chi tiết của tin tức 2',
                'posted_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
