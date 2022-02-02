<?php
namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\str;
use App\Models\Service;
use Illuminate\Support\Facades\File;
use App\Contracts\ServiceContract;

class ServiceRepository implements ServiceContract
{
    public function store(array $array)
    {
        $data = new Service;
        $data->name = $array['name'];
        $data->description = $array['description'];
        if(isset($array['image1']))
        {
            $file = $array['image1'];
            $extension =$file->getclientoriginalextension();
            $filename = rand().'_service.'.$extension;
            $file->move('assets/image/service',$filename);
            $data->image1 = $filename;
        }
        $data->save();
        return $data;
    }
    public function show($id)
    {
        $data = Service::find($id);
        return $data;
    }
    public function edit($id)
    {
        $data = Service::find($id);
        return $data;
    }
    public function update(array $array,$id)
    {
        $data = Service::find($id);
        $data->name = $array['name'];
        $data->description = $array['description'];
        if(isset($array['image1']))
        {
            $destination = 'assets/image/service/'.$array['image1'];
            if(file::exists($destination))
            {
                file::delete($destination);
            }
            $file = $array['image1'];
            $extension =$file->getclientoriginalextension();
            $filename = rand().'_service.'.$extension;
            $file->move('assets/image/service',$filename);
            $data->image1 = $filename;
        }
        $data->save();
    }
    public function destroy($id)
    {
        $service = Service::find($id);
        $destination = 'assets/image/service/'.$service->image1;
        if(file::exists($destination))
        {
            file::delete($destination);
        }
        $service->delete();
        return $service;
    }
}
?>