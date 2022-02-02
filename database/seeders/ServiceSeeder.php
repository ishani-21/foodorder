<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'id' => '1',
            'name' => 'French Service',
            'description' => 'French Service is a very detailed and highly skilled type of service.It is very elaborate and expensive type of service.',
            'image1' => 'french-service.webp',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('services')->insert([
            'id' => '2',
            'name' => 'Silver Service',
            'description' => 'The service style is similar to the French Service and Guèridon Service.The difference is an elaborate sterling silverware is used for the food and beverage service.',
            'image1' => 'silver-service.webp',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
