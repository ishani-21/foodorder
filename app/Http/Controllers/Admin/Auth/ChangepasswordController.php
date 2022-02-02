<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Restaurant;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Food;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;


class ChangepasswordController extends Controller
{
    public function changepassword(Request $request)
    {
        $request->validate([
            'currentpassword' => ['required'],
            'password' => ['required'],
            'confirmpassword' => ['same:password'],
        ]); 

        $a=Auth::guard('admin')->user();
        if(Hash::check($request->currentpassword, $a->password))
        {
            $a->password=Hash::make($request->password);
            $a->save();
            return redirect()->route('main');
        } else {
            return 'error';
        }
    }
    public function updateshow(){
        $a=Auth::guard('admin')->user();
        // dd($a);
        // $a = Admin::get();
        return view('admin.dashboard.edit-profile',compact('a'));
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        $a=Auth::guard('admin')->user();
        // dd($a->id);
        $admin = Admin::find($a->id);
        $admin->name = $request->name;
        // dd($Admin->name);
        $admin->mobile = $request->mobile;
        $admin->email = $request->email;
        $admin->address = $request->address;
        // dd($request->image);
        // $Admin->image = $request->image;
        // $file = $request->file('image');
        // dd($file);

        if($request-> hasfile('image'))
        {
            $destination = 'assets/image/admin/'.$admin->image;
            if(file::exists($destination))
            {
                file::delete($destination);
            }
            $file = $request->file('image');
            $extension =$file->getclientoriginalextension();
            $filename = time().'_admin_profile.'.$extension;
            $file->move('assets/image/admin',$filename);
            $admin->image = $filename;
        }
        $admin->save();
        return redirect()->route('admin.profile');
    }
    public function changestatus($restaurant)
    {
        
        $restaurant = Restaurant::find($restaurant);
        // dd($restaurant);
        // dd($category);
        // $restaurant->category->update(['status', ])
        // $restaurant->status = !($restaurant->status) ;
        if ($restaurant->status == '1') {
            $category = Category::where("restaurants_id", $restaurant->id)->get();
            // dd($category);
            foreach($category as $category){
                $categorys = Category::find($category->id);
                $categorys->status = '0';
                $categorys->save();
                $subcategory = Subcategory::where("categorys_id", $category->id)->get();
                foreach($subcategory as $subcategory){
                    $subcategorys = Subcategory::find($subcategory->id);
                    $subcategorys->status = '0';
                    $subcategorys->save();
                }
            }
            $restaurant->status = '0';
        } else {
            $category = Category::where("restaurants_id", $restaurant->id)->get();
            foreach($category as $category){
                $categorys = Category::find($category->id);
                $categorys->status = '1';
                $categorys->save();
                $subcategory = Subcategory::where("categorys_id", $category->id)->get();
                foreach($subcategory as $subcategory){
                    $subcategorys = Subcategory::find($subcategory->id);
                    $subcategorys->status = '1';
                    $subcategorys->save();
                }
            }
            $restaurant->status = '1';
        }
        $restaurant->save();
        return redirect()->route('admin.restaurant.index');
    }

    public function changecategory($category)
    {
        $category = Category::find($category);
        if ($category->status == '1') {
            $category->status = '0';
        } else {
            $category->status = '1';
        }
        $category->save();
        return redirect()->route('admin.category.create');
    }

    public function changesubcategory($subcategory)
    {
        $subcategory = Subcategory::find($subcategory);
        if ($subcategory->status == '1') {
            $subcategory->status = '0';
        } else {
            $subcategory->status = '1';
        }
        $subcategory->save();
        return redirect()->route('admin.subcategory.create');
    }
    public function changerestaurant(Request $request)
    {
        $category = Category::where("restaurants_id", $request->restaurants_id)->get();
        return $category;
    }
    
    public function editcategory(Request $request)
    {
        $subcategory = Subcategory::where("categorys_id", $request->categorys_id)->get();
        return $subcategory;
    }
    public function changefoodstatus($food)
    {
        $food = Food::find($food);
        if ($food->status == '1') {
            $food->status = '0';
        } else {
            $food->status = '1';
        }
        $food->save();
        return redirect()->route('admin.food.create');
    }
}
