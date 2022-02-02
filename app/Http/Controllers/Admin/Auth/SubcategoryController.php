<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\DataTables\SubcategoryDataTable;
use App\Contracts\SubcategoryContract;
use App\Repositories\SubcategoryRepositories;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function __construct(SubcategoryContract $Subcategory)
    {
        $this->Subcategory = $Subcategory;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = $this->Subcategory->index();
        return view('admin.dashboard.addsubcategory',compact('category'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SubcategoryDataTable $SubcategoryDataTable)
    {
        return $SubcategoryDataTable->render('admin.dashboard.listsubcategory');
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
            'categorys_id' => 'required|not-in:0',
            'name' => 'required|regex:/[A-Z]/',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $data = $this->Subcategory->store($request->all());
        
        return redirect()->route('admin.subcategory.create')->with('success','Subcategory successfully added!');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->Subcategory->show($id);
        return View('admin.dashboard.showsubcategory',compact('data'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = $this->Subcategory->edit($id);
        $data = $datas['data'];
        $category = $datas['category'];
        return View('admin.dashboard.editsubcategory',compact('data','category'));
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
            'categorys_id' => 'required|not-in:0',
            'name' => 'required|regex:/[A-Z]/',
        ]);
        $datas = $this->Subcategory->update($request->all(),$id);
        
        return redirect()->route('admin.subcategory.create')->with('info','Subcategory successfully Updated!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->Subcategory->destroy($id);
        
        return redirect()->route('admin.subcategory.create');
    }
}
