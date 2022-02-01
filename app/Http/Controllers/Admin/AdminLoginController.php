<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    //Admin Login
    public function adminLogin(){
        if(Auth::guard('admin')->check()){
            return view('/admin/dashboard');
        }else{
            return view('admin.auth.login');
        }
    }

    // Admin Login Check
    public function loginAdmin(Request $request){
        $data = $request->all();
        //dd($data);
        $rules = [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ];
        $custom_message = [
            'email.required' => 'Email field is required',
            'email.email' => 'Email field should contain valid email address',
            'email.max' => 'Character length exceeded',
            'password.required' => 'Password field is required',
        ];
        $this->validate($request, $rules, $custom_message);
        if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])){
            return redirect('/admin/dashboard');
        }else{
            Session::flash('error_message', 'Invalid Username or Password');
            return redirect()->back();
        }
    }

    //Admin Dashboard
    public function adminDashboard(){
        return view('admin.dashboard');
    }

    //Admin Logout
    public function adminLogout(){
        Auth::guard('admin')->logout();
        Session::flash('info_message', 'Logged out successfully !');
        return redirect('/admin/login');
    }
}
