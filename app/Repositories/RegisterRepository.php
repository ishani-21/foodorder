<?php
namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\str;
use App\Models\Food;
use App\Models\User;
use Illuminate\Support\Facades\File;
use App\Contracts\RegisterContract;
use Cviebrock\EloquentSluggable\Services\SlugService;

class RegisterRepository implements RegisterContract
{
    public function create(array $array)
    {
        return User::create([
            'mobile' => $array['mobile'],
            'name' => $array['name'],
            'email' => $array['email'],
            'address' => $array['address'],
            'password' => Hash::make($array['password']),
        ]);
    }
    // public function store(array $array)
    // {
    //     dd("store");
    // }
    public function show($id)
    {
        $user = $id ? User::find($id):User::all();
        return $user;
    }
    // public function edit($id)
    // {
    //     dd("edit");
    // }
    public function update(array $array,$id)
    {
        $data = User::find($id);
        $data->mobile = $array['mobile'];
        $data->name = $array['name'];
        $data->email = $array['email'];
        $data->address = $array['address'];
        $data->password = $array['password'];
        $data->save();
        return "sucessfully updated!!!";
    }
    // public function destroy($id)
    // {
    //     dd("destroy");
    // }
}
?>