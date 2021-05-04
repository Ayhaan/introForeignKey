<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            ['titre' => 'lorem ipsum titre1'],
            ['titre' => 'lorem ipsum titre2'],
            ['titre' => 'lorem ipsum titre3'],
        ]);
    }
}
