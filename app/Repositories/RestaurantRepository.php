<?php
namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\str;
use App\Models\Restaurant;
use Illuminate\Support\Facades\File;
use App\Contracts\RestaurantContract;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\DataTables\RestaurantDataTable;

class RestaurantRepository implements RestaurantContract
{
    public function index(){
        $restaurant = Restaurant::all();
        return $restaurant;

    }
    public function store(array $array)
    {
        $data = new Restaurant;
        $data->name = $array['name'];
        $data->mobile = $array['mobile'];
        $data->email = $array['email'];
        $data->address = $array['address'];
        if($array['image'])
        {
            $file = $array['image'];
            $extension =$file->getclientoriginalextension();
            $filename = time().'_restaurant_profile.'.$extension;
            $file->move('assets/image/restaurant',$filename);
            $data->image = $filename;
        }
        $data->password = Hash::make($array['password']);
        $data->slug = $array['name'];
        $data->status = "1";
        $data->save();
        return $data;
    }

    
    public function show($id)
    {
        $data = Restaurant::find($id);
        return $data;
    }

    public function edit($id)
    {
        $data = Restaurant::find($id);
        return $data;
    }

    public function update(array $array, $id)
    {
        $data = Restaurant::find($id);
        $data->name = $array['name'];
        $data->mobile = $array['mobile'];
        $data->email = $array['email'];
        $data->address = $array['address'];
        if(isset($array['image']))
        {
            $destination = 'assets/image/restaurant/'. $array['image'];
            if(file::exists($destination))
            {
                file::delete($destination);
            }
            $file = $array['image'];
            $extension =$file->getclientoriginalextension();
            $filename = time().'_restaurant_profile.'.$extension;
            $file->move('assets/image/restaurant',$filename);
            $data->image = $filename;
        }
        $data->save();
        return $data;
    }
    public function destroy($id)
    {
        $restaurant = Restaurant::find($id);
        $destination = 'assets/image/restaurant/'.$restaurant->image;
        if(file::exists($destination))
        {
            file::delete($destination);
        }
        $restaurant->delete();
        return $restaurant;
    }
}

?>