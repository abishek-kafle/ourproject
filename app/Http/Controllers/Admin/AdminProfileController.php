<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class AdminProfileController extends Controller
{
    // Admin Profile
    public function adminProfile(){
        $adminDetail = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        return view('admin.profile.profile', compact('adminDetail'));
    }

    // Admin Profile update
    public function adminProfileUpdate(Request $request, $id){
        $data = $request->all();
        $rules = [
            'name' => 'required',
            'email' => 'required|email|max:255',
            'phone' => 'numeric'
        ];
        $custom_message = [
            'name.required' => 'Name field should be required',
            'email.required' => 'Email field is required',
            'email.email' => 'Email field should contain valid email address',
            'email.max' => 'Character length exceeded',
            'phone.numeric' => 'Phone number should be digits',
        ];
        $this->validate($request, $rules, $custom_message);
        $admin = Admin::findOrFail($id);
        $admin->name = $data['name'];
        $admin->email = $data['email'];
        $admin->address = $data['address'];
        $admin->phone = $data['phone'];

        $random = Str::random(10);
        if($request->hasFile('image')){
            $img_temp = $request->file('image');
            if($img_temp->isValid()){
                $extension = $img_temp->getClientOriginalExtension();
                $filename = $random.".".$extension;
                $image_path = 'public/uploads/admin/'.$filename;
                Image::make($img_temp)->save($image_path);
                $admin->image = $filename;
            }
        }

        $admin->save();
        Session::flash('success_message', 'Profile updated successfully !');
        return redirect()->back();
    }

    public function deleteImage($id){
        $image = Admin::findOrFail($id);
        $image = Admin::where('id', $id)->update(['image' => '']);
        $image_path = 'public/uploads/admin/';
        if(!empty($image->image)){
            if(file_exists($image_path.$image->image)){
                unlink($image_path.$image->image);
            }
        }
        Session::flash('info_message', 'Image has been Deleted successfully');
        return redirect()->back();
    }
    public function changePassword(){
        return view ('admin.profile.changePassword');
    }

    public function chkUserPassword(Request $request){
        $data = $request->all();
        $current_password = $data['current_password'];
        $user_id = Auth::guard('admin')->user()->id;
        $check_password = Admin::where('id', $user_id)->first();
        if(Hash::check($current_password, $check_password->password)){
            return "true"; die;
        } else {
            return "false"; die;
        }
    }
}
