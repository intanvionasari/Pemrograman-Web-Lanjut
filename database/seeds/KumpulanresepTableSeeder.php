<?php

use Illuminate\Database\Seeder;

class KumpulanresepTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kumpulanresep')->insert([
            'id' =>1,
            'namamakanan' => 'Cumi Bakar',
            'deskripsi' => 'Cumi Bakar Anti Ribet',
            'bahandancara' => '1. Cumi Segar, 2. Bumbu Rempah, Caranya olesi cumi dengan bumbu rempah lalu bakar'
        ]);
    }
}
