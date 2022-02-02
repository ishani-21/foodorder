<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_uses')->insert([
            'id' => '1',
            'discription' => 'There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form, by injected humour  or randomised words which do not look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words',
            'image1' => 'aa1.jpg',
            'image2' => 'bl.jpg',
            'image3' => 'bl3.jpg',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
