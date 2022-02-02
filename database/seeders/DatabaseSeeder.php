<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
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
