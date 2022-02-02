<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Restaurant;
use App\DataTables\CategoryDataTable;
use App\Contracts\CategoryContract;
use App\Repositories\CategoryRepositories;

class CategoryController extends Controller
{
    public function __construct(CategoryContract $Category)
    {
        $this->Category = $Category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.addcategory');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CategoryDataTable $CategoryDataTable)
    {
        $Category =$this->Category->create();
        
        return $CategoryDataTable->render('admin.dashboard.listcategory');
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
            'restaurants_id' => 'required|not-in:0',
            'name' => 'required|regex:/[A-Z]/',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $Category =$this->Category->store($request->all());
        return redirect()->route('admin.category.create')->with('success','Category successfully added !');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $data =$this->Category->show($id);
        return View('admin.dashboard.showcategory',compact('data'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas =$this->Category->edit($id);
        $data = $datas['dataa'];
        $restaurant = $datas['restaurant'];
        return View('admin.dashboard.editcategory',compact('data','restaurant'));
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
            'name' => 'required|regex:/[A-Z]/',
        ]);
        $data =$this->Category->update($request->all(),$id);
        return redirect()->route('admin.category.create')->with('info','Category successfully updated');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =$this->Category->destroy($id);
        
        return redirect()->route('admin.category.create')->with('warning','Category successfully Deleted!');
    }
}
