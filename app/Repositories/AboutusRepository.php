<?php
namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\str;
use App\Models\Food;
use Illuminate\Support\Facades\File;
use App\Contracts\AboutusContract;
use App\Models\About_us;
// use Cviebrock\EloquentSluggable\Services\SlugService;

class AboutusRepository implements AboutusContract
{
    public function create()
    {
        $about = About_us::find(1);
        return $about;
    }
    public function update(array $array,$id)
    {
        $about = About_us::find(1);
        $data = About_us::find($id);
        $data->discription = $array['description'];
        if(isset($array['image1']))
        {
            $destination = 'assets/image/about/'.$data->image1;
            if(file::exists($destination))
            {
                file::delete($destination);
            }
            $file = $request->file('image1');
            $extension =$file->getclientoriginalextension();
            $filename = rand().'_about.'.$extension;
            $file->move('assets/image/about',$filename);
            $data->image1 = $filename;
        }else{
            $data->image1 = $about->image1;
        }
        if(isset($array['image2']))
        {
            $destination = 'assets/image/about/'.$data->image2;
            if(file::exists($destination))
            {
                file::delete($destination);
            }
            $file = $request->file('image2');
            $extension =$file->getclientoriginalextension();
            $filename = rand().'_about.'.$extension;
            $file->move('assets/image/about',$filename);
            $data->image2 = $filename;
        }else{
            $data->image2 = $about->image2;
        }
        if(isset($array['image3']))
        {
            $destination = 'assets/image/about/'.$data->image3;
            if(file::exists($destination))
            {
                file::delete($destination);
            }
            $file = $request->file('image3');
            $extension =$file->getclientoriginalextension();
            $filename = rand().'_about.'.$extension;
            $file->move('assets/image/about',$filename);
            $data->image3 = $filename;
        }else{
            $data->image3 = $about->image3;
        }
        $data->save();
    }
}
?>