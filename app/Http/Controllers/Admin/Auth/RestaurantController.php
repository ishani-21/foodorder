<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Restaurant;
use App\DataTables\RestaurantDataTable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RestaurantDataTable $RestaurantDataTable)
    {
        
        $restaurant =$this->Restaurant->index();
        return $RestaurantDataTable->render('admin.dashboard.listrestaurants');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.addrestaurant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        // return response()->json([
        //     'message' => 'Restaurant sucessfully created',
        //     'data' => $data
        // ]);

        return redirect()->route('admin.restaurant.index')->with('success','Restaurant successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $data =$this->Restaurant->show($id);
        return View('admin.dashboard.showrestaurant',compact('data'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =$this->Restaurant->edit($id);
        return View('admin.dashboard.editrestaurant',compact('data'));
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
        $validated = $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        $data = $this->Restaurant->update($request->all(),$id);

        // return response()->json([
        //     'message' => 'Restaurant sucessfully created',
        //     'data' => $data
        // ]);
        return redirect()->route('admin.restaurant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->Restaurant->destroy($id);
        return redirect()->route('admin.restaurant.index')->with('warning','Restaurant successfully Deleted!');
    }
}