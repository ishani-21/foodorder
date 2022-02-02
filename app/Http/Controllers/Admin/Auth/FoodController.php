<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Food;
use App\DataTables\FoodDataTable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Contracts\FoodContract;
use Cviebrock\EloquentSluggable\Services\SlugService;


class FoodController extends Controller
{
    public function __construct(FoodContract $FoodContract)
    {
        $this->FoodContract = $FoodContract;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurant = $this->FoodContract->index();
        return view('admin.dashboard.addfood',compact('restaurant'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FoodDataTable $FoodDataTable)
    {
        $restaurant = Restaurant::get();
        return $FoodDataTable->render('admin.dashboard.listfood',compact('restaurant'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'restaurant_id' => 'required|not-in:0',
            'category_id' => 'required|not-in:0',
            'subcategory_id' => 'required|not-in:0',
            'name' => 'required',
            'price' => 'required',
            'discription' => 'required',
            'image' => 'required'
        ]);
        $restaurant = $this->FoodContract->store($request->all());
        
        return redirect()->route('admin.food.create')->with('success','Food successfully added!');
        
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->FoodContract->show($id);
        return View('admin.dashboard.showfood',compact('data'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->FoodContract->edit($id);
        $restaurants = $data['restaurants'];
        $categorys = $data['categorys'];
        $subcategorys = $data['subcategorys'];
        return View('admin.dashboard.editfood',compact('data','restaurants','categorys','subcategorys'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'restaurants_id' => 'required|not-in:0',
            'categorys_id' => 'required|not-in:0',
            'subcategorys_id' => 'required|not-in:0',
            'name' => 'required',
            'price' => 'required',
            'discription' => 'required',
        ]);
        $data = $this->FoodContract->update($request->all(),$id);
        
        return redirect()->route('admin.food.create')->with('info','Food successfully added!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->FoodContract->destroy($id);
        return redirect()->route('admin.food.create')->with('warning','Food successfully deleted!');
    }
}
