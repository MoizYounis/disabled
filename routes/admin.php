<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    // Route::get('/admin', [AdminController::class, 'SignUp'])->name('admin');
});
