<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::insert([
            'title' => 'テスト1',
            'body' => "テスト1の本文です。",
            'created_at' => now()
        ]);

        Article::insert([
            'title' => 'テスト2',
            'body' => "テスト2の本文です。",
            'created_at' => now()
        ]);

        Article::insert([
            'title' => 'テスト3',
            'body' => "テスト3の本文です。",
            'created_at' => now()
        ]);

    }
}
