<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'id' =>1,
            'title' => 'Artikel Kesehatan',
            'content' => 'Cara Menjaga Kesehatan dalam Masa Pandemi',
            'featured_image' => ' '
            ]);
        
    }
}
