<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SocialController extends Controller
{
    // Social Setting
    public function social(){
        $social = Social::first();
        return view('admin.social.social', compact('social'));
    }
    // Social Setting Update
    public function socialUpdate(Request $request, $id){
        $data = $request->all();
        $social = Social::findOrFail($id);
        $social->facebook = $data['facebook'];
        $social->youtube = $data['youtube'];
        $social->linkedin = $data['linkedin'];
        $social->instagram = $data['instagram'];
        $social->twitter = $data['twitter'];
        $social->save();
        Session::flash('success_message', 'Social Settings has been Updated Successfully');
        return redirect()->back();
    }
}
