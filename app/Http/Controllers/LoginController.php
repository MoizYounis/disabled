<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $req)
    {
        $user=User::WHERE(['email'=>$req->email])->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return back()->with('error','Password or Email Does Not Match');
        } else {
            session()->put('user', $user);
            return redirect('home');
        }
    }
}