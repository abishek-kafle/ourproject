<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    //Admin Login
    public function adminLogin(){
        return view('admin.auth.login');
    }

    // Admin Login Check
    public function loginAdmin(Request $request){
        $data = $request->all();
        //dd($data);
        if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])){
            return redirect('/admin/dashboard');
        }else{
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
        return redirect('/admin/login');
    }
}
