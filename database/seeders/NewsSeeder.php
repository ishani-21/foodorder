<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'id' => '1',
            'title' => 'Healthy Food',
            'description' => 'A vast number of foods are both healthy and tasty. By filling your plate with fruits, vegetables, quality protein, and other whole foods, you’ll have meals that are colorful, versatile, and good for you.',
            'image1' => 'news.PNG',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('news')->insert([
            'id' => '2',
            'title' => 'Fruits and berries',
            'description' => 'These sweet, nutritious foods are very easy to incorporate into your diet because they require little to no preparation.',
            'image1' => 'news2.PNG',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
