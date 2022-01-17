<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    //Admin Login
    public function adminLogin(){
        return view('admin.auth.login');
    }

    //Admin Dashboard
    public function adminDashboard(){
        return view('admin.dashboard');
    }
}
