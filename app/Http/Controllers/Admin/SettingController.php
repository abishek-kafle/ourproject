<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    // Site Setting
    public function setting(){
        $setting = SiteSettings::first();
        return view('admin.setting.setting', compact('setting'));
    }
    // Site Setting Update
    public function settingUpdate(Request $request, $id){
        $data = $request->all();
        $setting = SiteSettings::findOrFail($id);
        $setting->email = $data['email'];
        $setting->office_hour = $data['hour'];
        $setting->address = $data['address'];
        $setting->phone = $data['phone'];
        $setting->alt_phone = $data['alt'];
        $setting->save();
        Session::flash('success_message', 'Site Settings has been Updated Successfully');
        return redirect()->back();
    }
}
