<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::with('categories')->find($user_id);
        return view('layouts.profile.index', compact('user'));
    }
}
