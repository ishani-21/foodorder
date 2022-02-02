<?php
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Category;

	if ( ! function_exists('sliderMainRestaurant'))
	    {
	        function sliderMainRestaurant()
	        {
				// $slider_side_restaurant =  App\Models\Restaurant::where('status',1)->orderBy('id','asc')->get()->take(3);
				$slider_side_restaurant =  App\Models\Restaurant::where('status',1)->orderBy('id','asc')->paginate(3);
					return array(
						'slider_side_restaurant'	=>	$slider_side_restaurant
					);
	        }
	    }

	// if ( ! function_exists('sliderMainCategorySwiggy'))
	//     {
	//         function sliderMainCategorySwiggy()
	//         {
	// 			$slider_swiggy_category =  App\Models\Category::where('restaurants_id',1)->orderBy('id','desc')->get()->take(6);
	// 				return array(
	// 					'slider_swiggy_category'	=> $slider_swiggy_category
	// 				);
	//         }
	//     }

 //    if ( ! function_exists('sliderMainCategoryDominoz'))
 //    {
 //        function sliderMainCategoryDominoz()
 //        {
	// 		$slider_dominoz_category =  App\Models\Category::where('restaurants_id',2)->orderBy('id','desc')->get()->take(6);
	// 			return array(
	// 				'slider_dominoz_category'	=> $slider_dominoz_category
	// 			);
 //        }
 //    }

?>