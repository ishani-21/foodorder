<?php
namespace App\Repositories;

use App\Contracts\CategoryContract;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryRepository implements CategoryContract
{
    public function create()
    {
        $category = Category::all();
        return $category;
    }
    public function store(array $array)
    {
        $data = new Category;
        $data->restaurants_id = $array['restaurants_id'];
        $data->name = $array['name'];
        if(isset($array['image']))
        {
            $file = $array['image'];
            $extension =$file->getclientoriginalextension();
            $filename = time().'_category.'.$extension;
            $file->move('assets/image/category',$filename);
            $data->image = $filename;
        }
        $data->slug = SlugService::createSlug(Category::class,'slug',$array['name']);
        $data->status = "1";
        $data->save();
        return $data;
    }
    public function show($id)
    {
        $data = Category::find($id);
        return $data;
    }
    public function edit($id)
    {
        $dataa = Category::find($id);
        $restaurant = Restaurant::get();
        $data['dataa']=$dataa;
        $data['restaurant']=$restaurant;
        return $data;
    }
    public function update(array $array,$id)
    {
        $data = Category::find($id);
        $data->restaurants_id = $array['restaurants_id'];
        $data->name = $array['name'];
        if(isset($array['image']))
        {
            $destination = 'assets/image/category/'.$array['image'];
            if(file::exists($destination))
            {
                file::delete($destination);
            }

            $file = $request->file('image');
            $extension =$file->getclientoriginalextension();
            $filename = time().'_category.'.$extension;
            $file->move('assets/image/category',$filename);
            $data->image = $filename;
        }
        $data->slug = SlugService::createSlug(Category::class,'slug',$array['name']);
        $data->status = "1";
        $data->save();
        return $data;
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $destination = 'assets/image/category/'.$category->image;
        if(file::exists($destination))
        {
            file::delete($destination);
        }
        $category->delete();
    }
}

?>