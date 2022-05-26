<?php

namespace App\Http\Controllers;

use App\Helpers\Constant;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // if (auth()->check()) {
        //     if (auth()->user()->role != Constant::ADMIN) {
        //         return redirect('home');
        //     }
        // }

        $user = auth()->user();

        $total_users = User::count();
        $approved_users = User::where('is_approved', 1)->count();
        $pending_users = User::where('is_approved', 0)->count();
        $new_users = User::where('is_new', 1)->count();
        $notifications = Notification::all();

        return view('admin.index', compact('user', 'total_users', 'approved_users', 'pending_users', 'new_users', 'notifications'));
    }
}
