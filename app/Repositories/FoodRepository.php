<?php
namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\str;
use App\Models\Restaurant;
use App\Models\Food;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\File;
use App\Contracts\FoodContract;
use Cviebrock\EloquentSluggable\Services\SlugService;


class FoodRepository implements FoodContract
{
    public function index()
    {
        $restaurant = Restaurant::get();
        return $restaurant;
    }
    public function create()
    {
        dd("create");
    }
    public function store(array $array)
    {
        $data = new Food;
        $data->restaurants_id = $array['restaurant_id'];
        $data->categorys_id = $array['category_id'];
        $data->subcategorys_id = $array['subcategory_id'];
        $data->name = $array['name'];
        $data->price = $array['price'];
        $data->discription = $array['discription'];
        if(isset($array['image']))
        {
            $file = $array['image'];
            $extension =$file->getclientoriginalextension();
            $filename = rand().'_food.'.$extension;
            $file->move('assets/image/food',$filename);
            $data->image = $filename;
        }
        if(isset($array['image2']))
        {
            $file = $array['image2'];
            $extension =$file->getclientoriginalextension();
            $filename = rand().'_food.'.$extension;
            $file->move('assets/image/food',$filename);
            $data->image2 = $filename;
        }
        if(isset($array['image3']))
        {
            $file = $array['image3'];
            $extension =$file->getclientoriginalextension();
            $filename = rand().'_food.'.$extension;
            $file->move('assets/image/food',$filename);
            $data->image3 = $filename;
        }
        $data->slug = SlugService::createSlug(Food::class,'slug',$array['name']);
        $data->status = "1";
        $data->save();
        return $data;
    }
    public function show($id)
    {
        $data = Food::find($id);
        return $data;
    }
    public function edit($id)
    {
        $data = Food::find($id);
        $restaurants = Restaurant::get();
        $categorys = Category::get();
        $subcategorys = Subcategory::get();
        $data['restaurants']=$restaurants;
        $data['categorys']=$categorys;
        $data['subcategorys']=$subcategorys;
        return $data;
    }
    public function update(array $array,$id)
    {
        $data = Food::find($id);
        $data->restaurants_id = $array['restaurants_id'];
        $data->categorys_id = $array['categorys_id'];
        $data->subcategorys_id = $array['subcategorys_id'];
        $data->name = $array['name'];
        $data->price = $array['price'];
        $data->discription = $array['discription'];
        if(isset($array['image']))
        {
            $destination = 'assets/image/food/'.$array['image'];
            if(file::exists($destination))
            {
                file::delete($destination);
            }
            $file = $array['image'];
            $extension =$file->getclientoriginalextension();
            $filename = rand().'_food.'.$extension;
            $file->move('assets/image/food',$filename);
            $data->image = $filename;
        }
        if(isset($array['image2']))
        {
            $destination = 'assets/image/food/'.$data->image2;
            if(file::exists($destination))
            {
                file::delete($destination);
            }
            $file = $array['image2'];
            $extension =$file->getclientoriginalextension();
            $filename = rand().'_food.'.$extension;
            $file->move('assets/image/food',$filename);
            $data->image2 = $filename;
        }
        if(isset($array['image3']))
        {
            $destination = 'assets/image/food/'.$data->image3;
            if(file::exists($destination))
            {
                file::delete($destination);
            }
            $file = $array['image3'];
            $extension =$file->getclientoriginalextension();
            $filename = rand().'_food.'.$extension;
            $file->move('assets/image/food',$filename);
            $data->image3 = $filename;
        }
        $data->slug = SlugService::createSlug(Food::class,'slug',$array['name']);
        $data->status = "1";
        $data->save();
        return $data;
    }
    public function destroy($id)
    {
        $food = Food::find($id);
        $destination = 'assets/image/food/'.$food->image;
        if(file::exists($destination))
        {
            file::delete($destination);
        }
        $food->delete();
        return $food;
    }
}