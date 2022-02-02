<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About_us;
use App\Models\Service;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Contracts\AboutusContract;

class About_usController extends Controller
{
    public function __construct(AboutusContract $Aboutus)
    {
        $this->Aboutus = $Aboutus;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About_us::find(1);
        $service = Service::all(); 
        $news = News::all();
        return view('welcome', compact('about', 'service', 'news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about = $this->Aboutus->create();
        return view('admin.dashboard.showabout',compact('about'));
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
            'description' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'image3' => 'required'
        ]);
        $data = new About_us;
        $data->discription = $request->description;
        if($request-> hasfile('image1'))
        {
            $file = $request->file('image1');
            $extension =$file->getclientoriginalextension();
            $filename = rand().'_about.'.$extension;
            $file->move('assets/image/about',$filename);
            $data->image1 = $filename;
        }
        if($request-> hasfile('image2'))
        {
            $file = $request->file('image2');
            $extension =$file->getclientoriginalextension();
            $filename = rand().'_about.'.$extension;
            $file->move('assets/image/about',$filename);
            $data->image2 = $filename;
        }
        if($request-> hasfile('image3'))
        {
            $file = $request->file('image3');
            $extension =$file->getclientoriginalextension();
            $filename = rand().'_about.'.$extension;
            $file->move('assets/image/about',$filename);
            $data->image3 = $filename;
        }
        $data->save();
        return redirect()->route('admin.about_us.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd(1);
        return view('welcome');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'description' => 'required'
        ]);
        $about = $this->Aboutus->update($request->all(),$id);
        
        return redirect()->route('admin.about_us.create');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
