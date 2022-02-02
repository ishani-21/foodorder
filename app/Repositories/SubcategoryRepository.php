<?php
namespace App\Repositories;

use App\Contracts\SubcategoryContract;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Cviebrock\EloquentSluggable\Services\SlugService;

class SubcategoryRepository implements SubcategoryContract
{
    public function index()
    {
        $category = Category::get();
        return $category;
    }
    public function store(array $array)
    {
        $data = new Subcategory;
        $data->categorys_id = $array['categorys_id'];
        $data->name = $array['name'];
        if($array['image'])
        {
            $file = $array['image'];
            $extension =$file->getclientoriginalextension();
            $filename = time().'_subcategory.'.$extension;
            $file->move('assets/image/subcategory',$filename);
            $data->image = $filename;
        }
        $data->slug = SlugService::createSlug(Subcategory::class,'slug',$array['name']);
        $data->status = "1";
        $data->save();
        return $data;
    }
    public function show($id)
    {
        $data = Subcategory::find($id);
        return $data;
    }
    public function edit($id)
    {
        $dataa = Subcategory::find($id);
        $category = Category::get();
        $datas['data']=$dataa;
        $datas['category']=$category;
        return $datas;
    }
    public function update(array $array,$id)
    {
        $data = Subcategory::find($id);
        $data->categorys_id = $array['categorys_id'];
        $data->name = $array['name'];
        if(isset($array['image']))
        {
            $destination = 'assets/image/subcategory/'.$array['image'];
            if(file::exists($destination))
            {
                file::delete($destination);
            }

            $file = $array['image'];
            $extension =$file->getclientoriginalextension();
            $filename = time().'_subcategory.'.$extension;
            $file->move('assets/image/subcategory',$filename);
            $data->image = $filename;
        }
        $data->slug = SlugService::createSlug(Subcategory::class,'slug',$array['name']);
        $data->status = "1";
        $data->save();
    }
    public function destroy($id)
    {
        $Subcategory = Subcategory::find($id);
        $destination = 'assets/image/subcategory/'.$Subcategory->image;
        if(file::exists($destination))
        {
            file::delete($destination);
        }
        $Subcategory->delete();
    }
}
?>
