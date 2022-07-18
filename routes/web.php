<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AllUsersController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserLoginController;
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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    // Admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    //Roles
    Route::resource('roles', RoleController::class);

    // Assign Permissions
    Route::post('roles/assign-permissions', [RoleController::class, 'assignPermissions'])->name('roles
    assignPermissions');

    //Blog
    Route::resource('blogs', BlogController::class);

    //Store
    Route::resource('store', StoreController::class);

    // All Users
    Route::resource('all_users', AllUsersController::class);
    Route::get('approved_user/{id}', [AllUsersController::class, 'approvedUser'])->name('approved.user');
    Route::post('reject_user/{id}', [AllUsersController::class, 'rejectUser'])->name('reject.user');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('admin_login_form', [AdminAuthController::class, 'login'])->name('admin_login_form');


Route::get('user/register', [UserLoginController::class, 'userRegisterView'])->name('userRegisterView');
Route::get('user/login', [UserLoginController::class, 'userLoginView'])->name('userLoginView');
Route::post('user/login', [UserLoginController::class, 'userLogin'])->name('userLogin');

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('blog', [HomeController::class, 'blogs'])->name('blog');
Route::get('Read-About/NGOs', [HomeController::class, 'ngoDetail'])->name('ngo-detail');
Route::get('Read-About/Schools', [HomeController::class, 'schoolDetail'])->name('school-detail');
Route::get('Read-About/Hospital', [HomeController::class, 'hospitalDetail'])->name('hospital-detail');
Route::get('Read-About/Stores', [HomeController::class, 'storeDetail'])->name('store-detail');
Route::get('UNOs/SDGs/Rules', [HomeController::class, 'sdgsDetail'])->name('sdgs-detail');
Route::get('Search/Roles', [HomeController::class, 'searchRole'])->name('search-role');
Route::get('stores', [HomeController::class, 'stores'])->name('stores');
Route::get('store/products/{id}', [HomeController::class, 'allProducts'])->name('allProducts');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/user_logout',[UserLoginController::class,'userLogout'])->name('userLogout');
Route::get('user/product-request/{id}', [StoreController::class, 'productRequest'])->name('product-request');
Route::group(['middleware' => ['user_auth']], function () {

});
