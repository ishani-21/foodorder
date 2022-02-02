<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'id' => '1',
            'name' => 'Gujarat Grill',
            'mobile' => '9824902713',
            'email' => 'gujratgrill@gmail.com',
            'address' => 'surat',
            'image' => 'Gujrat Grill.jpeg',
            'password' => Hash::make('123'),
            'slug' => 'Gujrat-Grill',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('restaurants')->insert([
            'id' => '2',
            'name' => 'Palatial',
            'mobile' => '9824902714',
            'email' => 'platial@gmail.com',
            'address' => 'surat',
            'image' => 'Palatial.jpeg',
            'password' => Hash::make('123'),
            'slug' => 'platial',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('restaurants')->insert([
            'id' => '3',
            'name' => 'TGB',
            'mobile' => '9824902715',
            'email' => 'tgb@gmail.com',
            'address' => 'surat',
            'image' => 'TGB.jpeg',
            'password' => Hash::make('123'),
            'slug' => 'TGB',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('restaurants')->insert([
            'id' => '4',
            'name' => 'Burger King',
            'mobile' => '9824902716',
            'email' => 'burgerking@gmail.com',
            'address' => 'surat',
            'image' => 'Burger King.jpg',
            'password' => Hash::make('123'),
            'slug' => 'Burger-King',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('restaurants')->insert([
            'id' => '5',
            'name' => 'Zomato',
            'mobile' => '9824902716',
            'email' => 'zomato@gmail.com',
            'address' => 'surat',
            'image' => 'Zomato.png',
            'password' => Hash::make('123'),
            'slug' => 'Zomato',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('restaurants')->insert([
            'id' => '6',
            'name' => 'Papillon',
            'mobile' => '9824902716',
            'email' => 'papillon@gmail.com',
            'address' => 'surat',
            'image' => 'Papillon.jpg',
            'password' => Hash::make('123'),
            'slug' => 'Papillon',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('restaurants')->insert([
            'id' => '7',
            'name' => 'Second Cup',
            'mobile' => '9824902716',
            'email' => 'secondcup@gmail.com',
            'address' => 'surat',
            'image' => 'second_cup.jpg',
            'password' => Hash::make('123'),
            'slug' => 'Second-Cup',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('restaurants')->insert([
            'id' => '8',
            'name' => 'Rajwadu',
            'mobile' => '9824902716',
            'email' => 'rajwadu@gmail.com',
            'address' => 'surat',
            'image' => 'Rajwadu.jpg',
            'password' => Hash::make('123'),
            'slug' => 'Rajwadu',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('restaurants')->insert([
            'id' => '9',
            'name' => 'Papillon',
            'mobile' => '9824902716',
            'email' => 'papillon@gmail.com',
            'address' => 'surat',
            'image' => 'Papillon.jpg',
            'password' => Hash::make('123'),
            'slug' => 'Papillon',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
