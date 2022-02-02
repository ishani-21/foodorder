<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Gujarat Grill
        $category = [
        [
            'restaurants_id' => '1',
            'name' => 'Soup',
            'image' => 'soups.jpg',
            'slug' => 'soup',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'restaurants_id' => '1',
            'name' => 'Salad',
            'image' => 'salads.jpg',
            'slug' => 'salad',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'restaurants_id' => '1',
            'name' => 'Dessert',
            'image' => 'desserts.webp',
            'slug' => 'dessert',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        // palatian
        [
            'restaurants_id' => '2',
            'name' => 'Noodles',
            'image' => 'noodles.jpg',
            'slug' => 'noodles',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'restaurants_id' => '2',
            'name' => 'Charcoal Grill',
            'image' => 'charcoal grill.jpeg',
            'slug' => 'charcoal-grill',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'restaurants_id' => '2',
            'name' => 'Rice',
            'image' => 'rice.jpeg',
            'slug' => 'rice',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        // TGB
        [
            'restaurants_id' => '3',
            'name' => 'Puff',
            'image' => 'puffs.jpeg',
            'slug' => 'puff',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'restaurants_id' => '3',
            'name' => 'Sundaes',
            'image' => 'sundaes.png',
            'slug' => 'sundaes',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'restaurants_id' => '3',
            'name' => 'Sandwich',
            'image' => 'sandwich.jpeg',
            'slug' => 'sandwich',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        // Burger king
        [
            'restaurants_id' => '4',
            'name' => 'Burger',
            'image' => 'burger.jpg',
            'slug' => 'burger',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'restaurants_id' => '4',
            'name' => 'Cold Drinks',
            'image' => 'cold drinks.jpg',
            'slug' => 'cold-drinks',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ],[
            'restaurants_id' => '4',
            'name' => 'Creamy Sundaes',
            'image' => 'creamy sundays.jpg',
            'slug' => 'creamy-sundaes',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        // Zomato
        [
            'restaurants_id' => '5',
            'name' => 'Fried Rise',
            'image' => 'fried rice.jpg',
            'slug' => 'fried-rice',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'restaurants_id' => '5',
            'name' => 'Noodles',
            'image' => 'noodles1.jpg',
            'slug' => 'noodles',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'restaurants_id' => '5',
            'name' => 'Rolls',
            'image' => 'rolls.jpeg',
            'slug' => 'rolls',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        // Papillon
        [
            'restaurants_id' => '6',
            'name' => 'Pasta',
            'image' => 'pasta.jpg',
            'slug' => 'pasta',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'restaurants_id' => '6',
            'name' => 'Snacks',
            'image' => 'snacks.jpeg',
            'slug' => 'snacks',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'restaurants_id' => '6',
            'name' => 'Moctails',
            'image' => 'moctails.jpg',
            'slug' => 'moctails',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]
        ];
        Category::insert($category);
    }
}
