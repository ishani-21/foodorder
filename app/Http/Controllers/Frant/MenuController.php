<?php

namespace App\Http\Controllers\Frant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Food;
use App\Models\Setting;

use App\Contracts\MenuContract;
use App\Repositories\MenuRepository;

class MenuController extends Controller
{
    public function __construct(MenuContract $Menu)
    {
        $this->Menu = $Menu;
    }

    public function category($slug)
    {
        $menu = $this->Menu->category($slug);
        $main_side_restaurant = $menu[0];
        $category = $menu[1];
        $sub_desc = $menu[2];
    	return view('frant.swiggy', compact('main_side_restaurant', 'category', 'sub_desc'));
    }

    public function subCategory($slug)
    {
        $menu = $this->Menu->subCategory($slug);
    	$main_side_category = $menu[0];
        $subcategory = $menu[1];
        $subcate_desc = $menu[2];
    	return view('frant.subcategory', compact('main_side_category', 'subcategory', 'subcate_desc'));
    }

    public function foodList($slug)
    {
        $menu = $this->Menu->foodList($slug);
        $main_side_food = $menu[0];
        $restaurant_address = $menu[1];
        return view('frant.food', compact('main_side_food','restaurant_address'));
    }
}
