<?php

use App\Http\Controllers\Admin\AdminLoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\Front\IndexController::class, 'index']);

Route::prefix('/admin')->group(function(){
    // Admin Login
    Route::get('/login', [App\Http\Controllers\Admin\AdminLoginController::class,'adminLogin'])->name('adminLogin');
    Route::post('/login', [App\Http\Controllers\Admin\AdminLoginController::class, 'loginAdmin'])->name('loginAdmin');

    Route::group(['middleware' => 'admin'], function(){
        // Admin Dashboard
        Route::get('/dashboard', [App\Http\Controllers\Admin\AdminLoginController::class, 'adminDashboard'])->name('adminDashboard');
        //  Admin Profile
        Route::get('/profile', [App\Http\Controllers\Admin\AdminProfileController::class, 'adminProfile'])->name('adminProfile');
        // Admin Profile update
        Route::post('/profile/update/{id}', [\App\Http\Controllers\Admin\AdminProfileController::class, 'adminProfileUpdate'])->name('adminProfileUpdate');
        // Delete Image
        Route::get('/delete-image/{id}', [\App\Http\Controllers\Admin\AdminProfileController::class, 'deleteImage'])->name('deleteImage');
        // Change Password
        Route::get('/change-password', [\App\Http\Controllers\Admin\AdminProfileController::class, 'changePassword'])->name('changePassword');
        // Check Current Password
        Route::post('/check-password', [\App\Http\Controllers\Admin\AdminProfileController::class, 'chkUserPassword'])->name('chkUserPassword');
        //Update Admin password
        Route::post('/profile/update_password/{id}', [\App\Http\Controllers\Admin\AdminProfileController::class, 'updatePassword'])->name('updatePassword');
        // Theme Settings
        Route::get('/theme', [\App\Http\Controllers\Admin\ThemeController::class, 'theme'])->name('theme');
        Route::post('/theme/{id}', [\App\Http\Controllers\Admin\ThemeController::class, 'themeUpdate'])->name('themeUpdate');
    });

    // Admin Logout
    Route::get('/logout', [App\Http\Controllers\Admin\AdminLoginController::class, 'adminLogout'])->name('adminLogout');
});
