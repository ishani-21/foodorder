<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategory = [
            // Gujarat Grill -> soup
            [
                'categorys_id' => '1',
                'name' => 'Tomato Soup',
                'image' => 'Tomato.jpeg',
                'slug' => 'tomato-soup',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '1',
                'name' => 'Flavors Special Soup',
                'image' => 'flavors.jpeg',
                'slug' => 'flavors-special-soup',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '1',
                'name' => 'Manchow Soup',
                'image' => 'Manchow.jpeg',
                'slug' => 'manchow-soup',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            // Gujarat Grill -> Salad
            [
                'categorys_id' => '2',
                'name' => 'Fresh Salad',
                'image' => 'Fresh.jpg',
                'slug' => 'fresh-salad',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '2',
                'name' => 'Chana Chat',
                'image' => 'Chana Chat.jpeg',
                'slug' => 'chana-chat',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '2',
                'name' => 'Apple and Sprout Salad.',
                'image' => 'Apple and Sprout Salad..jpg',
                'slug' => 'apple-and-sprout-salad',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            // Gujarat Grill -> Dessert
            [
                'categorys_id' => '3',
                'name' => 'Ras Gulla',
                'image' => 'Ras Gulla.jpeg',
                'slug' => 'ras-gulla',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '3',
                'name' => 'Gulab Jamun',
                'image' => 'Gulab Jamun.jpeg',
                'slug' => 'gulab-jamun',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '3',
                'name' => 'Fruit Custard',
                'image' => 'Fruit Custard.jpg',
                'slug' => 'fruit-custard',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            
            // palatian -> Noodles
            [
                'categorys_id' => '4',
                'name' => 'Hakka Noodles',
                'image' => 'Hakka Noodles.jpeg',
                'slug' => 'hakka-noodles',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '4',
                'name' => 'Schezwan Noodles',
                'image' => 'Schezwan.jpeg',
                'slug' => 'sechezwan-noodles',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '4',
                'name' => 'Soba Noodles',
                'image' => 'Soba.jpeg',
                'slug' => 'soba-noodles',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            // palatian -> Charcoal Grill
            [
                'categorys_id' => '5',
                'name' => 'Paneer Tikka',
                'image' => 'Paneer Tikka.jpeg',
                'slug' => 'paneer-tikka',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '5',
                'name' => 'Tandoori Broccoli',
                'image' => 'Tandoori Broccoli.jpeg',
                'slug' => 'tandoori-broccoli',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '5',
                'name' => 'Mushroom Cheese Melt',
                'image' => 'Mushroom Cheese Melt.jpg',
                'slug' => 'mushroom-cheese-melt',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            // palatian -> Rice
            [
                'categorys_id' => '6',
                'name' => 'Special Vegetable Fried Rice',
                'image' => 'Special Vegetable Fried Rice.jpeg',
                'slug' => 'special-vegetable-fried-rice',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '6',
                'name' => 'Egg Fried Rice',
                'image' => 'Egg Fried Rice.jpeg',
                'slug' => 'egg-fried-rice',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '6',
                'name' => 'Manchurian Fried Rice',
                'image' => 'Manchurian Fried Rice.jpeg',
                'slug' => 'manchurian-fried-rice',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            
            // TGB -> Puff
            [
                'categorys_id' => '7',
                'name' => 'Veg. Puff',
                'image' => 'Veg. Puff.jpeg',
                'slug' => 'veg-puff',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '7',
                'name' => 'Cheese Puff',
                'image' => 'Cheese Puff.jpeg',
                'slug' => 'cheese-puff',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '7',
                'name' => 'Kadhai Paneer Puff',
                'image' => 'Kadhai Paneer Puff.jpeg',
                'slug' => 'kadhai-paneer-puff',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            // TGB -> Sundaes
            [
                'categorys_id' => '8',
                'name' => 'Choclate Lava',
                'image' => 'Choclate Lava.jpeg',
                'slug' => 'choclate-lava',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '8',
                'name' => 'Pastry',
                'image' => 'Pastry.jpeg',
                'slug' => 'pastry',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '8',
                'name' => 'Sizzling Brownie',
                'image' => 'Sizzling Brownie.jpeg',
                'slug' => 'sizzling-brownie',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            // TGB -> sandwich
            [
                'categorys_id' => '9',
                'name' => 'American Club Sandwich',
                'image' => 'American Club.jpeg',
                'slug' => 'american-club',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '9',
                'name' => 'Cheese Chutney Sandwich',
                'image' => 'Cheese Chutney Sandwich.jpeg',
                'slug' => 'cheese-chutney-sandwich',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '9',
                'name' => 'Vegetable Cheese Melt',
                'image' => 'Vegetable Cheese Melt.jpeg',
                'slug' => 'vegetable-cheese-melt',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],

            // Burger king -> Burger
            [
                'categorys_id' => '10',
                'name' => 'Crispy Veg Burger',
                'image' => 'Crispy Veg Burger.jpeg',
                'slug' => 'crispy-veg-burger',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '10',
                'name' => 'Bk Classic Veg',
                'image' => 'Bk Classic Veg.jpeg',
                'slug' => 'bk-classic-veg',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '10',
                'name' => 'Crispy Veg Double Patty',
                'image' => 'Crispy Veg Double Patty.jpeg',
                'slug' => 'crispy-veg-patty',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            // Burger king -> Cold Drinks
            [
                'categorys_id' => '11',
                'name' => 'Pepsi',
                'image' => 'pepsi.jpeg',
                'slug' => 'pepsi',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '11',
                'name' => 'Choclate Thik Shake',
                'image' => 'Choclate Thik Shake.jpeg',
                'slug' => 'choclate-thik-shake',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '11',
                'name' => 'Berry Blast Thik Shake',
                'image' => 'Berry Blast Thik Shake.jpeg',
                'slug' => 'berry-blast-thik-shake',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            // Burger king -> Creamy Sundaes
            [
                'categorys_id' => '12',
                'name' => 'Chocolate Sundaes',
                'image' => 'Chocolate Sundaes.jpeg',
                'slug' => 'choclate-sundaes',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '12',
                'name' => 'Strawberry Sundaes',
                'image' => 'Strawberry Sundaes.jpeg',
                'slug' => 'strawberry-sundaes',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '12',
                'name' => 'Turtle Sundaes',
                'image' => 'Turtle Sundaes.jpeg',
                'slug' => 'turtle-sundaes',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],

            // Zomato -> Fried Rise
            [
                'categorys_id' => '13',
                'name' => 'Noodlestir Fried Rice',
                'image' => 'Noodlestir Fried Rice.jpeg',
                'slug' => 'noodlestir-fried-rice',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '13',
                'name' => 'lighter Fried Rice',
                'image' => 'lighter Fried Rice.jpeg',
                'slug' => 'lighter-fried-rice',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '13',
                'name' => 'Yang Chow Fried Rice',
                'image' => 'Yang Chow Fried Rice.jpeg',
                'slug' => 'yang-chow-fried-rice',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            // Zomato -> Noodles
            [
                'categorys_id' => '14',
                'name' => 'Hokkien Noodles',
                'image' => 'Hokkien Noodles.jpeg',
                'slug' => 'hokkien-noodles',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '14',
                'name' => 'Rice Stick Noodles',
                'image' => 'Rice Stick Noodles.jpeg',
                'slug' => 'rice-stick-noodles',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '14',
                'name' => 'Udon Noodles',
                'image' => 'Udon Noodles.jpeg',
                'slug' => 'udon-noodles',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            // Zomato -> Rolls
            [
                'categorys_id' => '15',
                'name' => 'Manchurian Roll',
                'image' => 'Manchurian Roll.jpeg',
                'slug' => 'manchurian-roll',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '15',
                'name' => 'Cheese Chill Manchurian Roll',
                'image' => 'Cheese Chill Manchurian Roll.jpeg',
                'slug' => 'cheese-chill-manchuria-roll',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '15',
                'name' => 'Paneer Roll',
                'image' => 'Paneer Roll.jpeg',
                'slug' => 'paneer-roll',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],

            // Papillon -> Pasta
            [
                'categorys_id' => '16',
                'name' => 'White Souce Pasta',
                'image' => 'White Souce Pasta.jpeg',
                'slug' => 'white-souce-pasta',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '16',
                'name' => 'Macaroni Pasta',
                'image' => 'Macaroni Pasta.jpeg',
                'slug' => 'macroni-pasta',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '16',
                'name' => 'Desi Masala Pasta',
                'image' => 'Desi Masala Pasta.jpeg',
                'slug' => 'desi-masala-pasta',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            // Papillon -> Snacks
            [
                'categorys_id' => '17',
                'name' => 'Bitterballen',
                'image' => 'Bitterballen.jpeg',
                'slug' => 'bitterballen',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '17',
                'name' => 'Veg. Cutlet',
                'image' => 'Veg. Cutlet.jpeg',
                'slug' => 'veg-cutlet',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '17',
                'name' => 'Paneer Pakoda',
                'image' => 'Paneer Pakoda.jpeg',
                'slug' => 'paneer-pakoda',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            // Papillon -> Moctails
            [
                'categorys_id' => '18',
                'name' => 'Green Hornet',
                'image' => 'Green Hornet.jpeg',
                'slug' => 'green-hornet',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '18',
                'name' => 'Mastani',
                'image' => 'Mastani.jpeg',
                'slug' => 'mastani',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'categorys_id' => '18',
                'name' => 'Apple Fizz',
                'image' => 'Apple Fizz.jpeg',
                'slug' => 'apple-fizz',
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];
        Subcategory::insert($subcategory);
    }
}
