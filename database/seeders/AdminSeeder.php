<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'id' => '1',
            'name' => 'Admin',
            'mobile' => '9824902713',
            'email' => 'admin@gmail.com',
            'address' => 'surat',
            'image' => '',
            'password' => Hash::make('admin'),
            'created_at' => date('Y-m-d H:i:s'),
        ]); 
    }
}
