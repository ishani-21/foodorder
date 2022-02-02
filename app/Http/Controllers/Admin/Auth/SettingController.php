<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function setting()
    {
        $setting = Setting::find(1);
        return view('admin.dashboard.editsetting',compact('setting'));
    }
    public function settingStore(Request $request)
    {
        $validated = $request->validate([
            'rdiscription' => 'required',
            'mdiscription' => 'required',
            'sdiscription' => 'required',
            'follow_us' => 'required',
        ]);

        $setting = Setting::find(1);
        if($request-> hasfile('logo'))
        {
            $destination = 'assets/image/logo/'.$setting->logo;
            if(file::exists($destination))
            {
                file::delete($destination);
            }
            $file = $request->file('logo');
            $extension =$file->getclientoriginalextension();
            $filename = "logo.png";
            $file->move('assets/image/logo',$filename);
            $setting->logo = $filename;
        }
        $setting->restaurant_discription = $request->rdiscription;
        $setting->menu_discription = $request->mdiscription;
        $setting->submenu_discription = $request->sdiscription;
        $setting->follow_us = $request->follow_us;
        $setting->save();
        return redirect()->route('admin.main');
    }
}
