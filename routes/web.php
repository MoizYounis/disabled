<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthenticationController;

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
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});
Route::get('logout', [MainController::class, 'logout'])->name('logout');
Route::group(['middleware' => ['user']], function (){
    Route::get('/', function () {
        return view('login.index');
    });
    Route::view('/login', 'login.index');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::get('register', [AuthenticationController::class, 'register'])->name('register');
    Route::post('register', [AuthenticationController::class, 'store'])->name('register.store');
});
Route::get('home', [MainController::class, 'home'])->name('home');
Route::get('typography', [MainController::class, 'typography'])->name('typography');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('contact', [MainController::class, 'contact'])->name('contact');
