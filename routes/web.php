<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
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
Route::get('/',function(){
    return redirect()->route('admin');
});

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('typography', [HomeController::class, 'typography'])->name('typography');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('profile', [ProfileController::class, 'index'])->name('profile');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    // Admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    //Roles
    Route::resource('roles', RoleController::class);
    Route::post('roles/assign-permissions', [RoleController::class, 'assignPermissions'])->name('roles.assignPermissions');

    //Blog
    Route::resource('blogs', BlogController::class);

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('admin_login_form', [AdminAuthController::class, 'login'])->name('admin_login_form');
