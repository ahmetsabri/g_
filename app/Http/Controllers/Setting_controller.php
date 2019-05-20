<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Session;

class Setting_controller extends Controller
{
     
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        //
        $setting =Setting::first();
        return view('admin.setting.index')->with('setting',$setting);
    }

      public function update()
    {
        //
        $setting = Setting::first();
        $setting->site_name = request()->site_name;
        $setting->contact_phone = request()->contact_phone;
        $setting->contact_email= request()->contact_email;
        $setting->address = request()->address;
        $setting->save();
        Session::flash('success','seting updated succesfuly');
        return redirect()->back();
    }
}

