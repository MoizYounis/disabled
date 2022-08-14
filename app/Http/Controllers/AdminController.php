<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Notification;
use App\Models\User;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Utils\Constant;

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
        $stores = Store::pluck('user_id')->toArray();
        $stores_unq = count(array_unique($stores));
        $total_users = User::count();
        $ngos = User::where('role', Constant::NGO)->count();
        $hospitals = User::where('role', Constant::HOSPITAL)->count();
        $schools = User::where('role', Constant::SCHOOL)->count();
        $approved_users = User::where('is_approved', 1)->count();
        $pending_users = User::where('is_approved', 0)->count();
        $new_users = User::where('is_new', 1)->count();
        $notifications = Notification::all();
        $contacts = Contact::orderBy('id', 'DESC')->get();

        return view('admin.index', compact('user', 'total_users', 'approved_users', 'pending_users', 'new_users', 'notifications','total_users' ,'ngos', 'hospitals', 'schools', 'stores_unq', 'contacts'));
    }
}
