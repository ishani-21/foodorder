<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\RegisterRequest;
use App\Models\Register;
use Illuminate\Support\Facades\File;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    {
        $register = new Register();
        $register->name=$request->name;
        $register->mobile=$request->mobile;
        $register->email=$request->email;
        $register->address=$request->address;
        // $register->image=$request->image;
        if($request-> hasfile('image'))
        {
            $file = $request->file('image');
            $extension =$file->getclientoriginalextension();
            $filename = time().'_register.'.$extension;
            $file->move('assets/image/register_user',$filename);
            $register->image = $filename;
        }
        $register->password=$request->password;
        $register->save();
        return view('admin.auth.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
    public function changepassword(Request $request)
    {
        $user=auth()->user();
        if(Hash::check($request->current_password, $user->password))
        {
            $user->password=Hash::make($request->password);
            $user->save();
            return redirect()->route('home');
        } else {
            return 'error';
        }
    }
}
