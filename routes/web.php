<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;


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
    return view('auth.login');
    });
    Auth::routes();
    Route::group(['middleware' => ['auth']], function () {
        Route::get('home', [HomeController::class, 'home'])->name('home');
        Route::get('typography', [HomeController::class, 'typography'])->name('typography');
        Route::get('about', [HomeController::class, 'about'])->name('about');
        Route::get('contact', [HomeController::class, 'contact'])->name('contact');
    });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
