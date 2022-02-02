<?php

namespace App\Repositories;

use App\Contracts\MenuContract;
use App\Models\Restaurant;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Food;
use App\Models\Setting;

class MenuRepository implements MenuContract
{
	public function category($slug)
	{
    	$main_side_restaurant = Restaurant::where('slug',$slug)->first();
    	$category = Category::where('restaurants_id',$main_side_restaurant['id'])->get();
    	// $category = Category::where('restaurants_id',$main_side_restaurant['id'])->paginate(3);
    	// dd($category);
    	// if($array->ajax()){     
     //        return view('frant.rest', compact('data'))->render();
     //    }
		$sub_desc = Setting::all();
    	return [$main_side_restaurant, $category, $sub_desc];
	}

	public function subCategory($slug)
	{
		$main_side_category = Category::where('slug',$slug)->first();
		$subcategory = Subcategory::where('categorys_id',$main_side_category->id)->get();
	    $subcate_desc = Setting::all();
	    return [$main_side_category, $subcategory, $subcate_desc];
	}

	public function foodList($slug)
	{
		$main_side_food = Food::where('slug', $slug)->first();
		// dd($main_side_food);
        $restaurant_address = Restaurant::where('id', $main_side_food->restaurants_id)->first();
        return [$main_side_food, $restaurant_address];
	}
}

?>