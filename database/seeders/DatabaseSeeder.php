<?php

namespace Database\Seeders;

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
        $this->call(AdminSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(RestaurantSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(FoodSeeder::class);
    }
}
