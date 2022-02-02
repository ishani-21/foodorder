<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use Cviebrock\EloquentSluggable\Services\SlugService;

use App\Contracts\RestaurantContract;
use App\Repositories\RestaurantRepositories;

class RestaurantController extends Controller
{
    protected $Restaurant;

    public function __construct(RestaurantContract $Restaurant)
    {
        $this->Restaurant = $Restaurant;
    }

    public function list($name=null)
    {
        return $name?Restaurant::where('name','=',$name)->get():Restaurant::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|regex:/[A-Z]/',
            'mobile' => 'required|regex:/[0-9]/',
            'email' => 'required|email',
            'address' => 'required|regex:/[A-Z]/',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'password' => 'required',
            // 'password' => 'required|min:6|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
            'cpassword' => 'required_with:password|same:password',
        ]);
        $data = $this->Restaurant->store($request->all());

        return response()->json([
            'message' => 'Restaurant sucessfully created',
            'data' => $data
        ]);

    }
    public function update(Request $request, $id)
    {   
        $validated = $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        $data = $this->Restaurant->update($request->all(),$id);

        return response()->json([
            'message' => 'Restaurant sucessfully Updated',
            'data' => $data
        ]);
        // return redirect()->route('admin.restaurant.index');
    }
    public function destroy($id)
    {
        $data = $this->Restaurant->destroy($id);
    
        return response()->json([
            'message' => 'Restaurant sucessfully deleted',
            'data' => $data
        ]);
    }
}
