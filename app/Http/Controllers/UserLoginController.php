<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserLoginController extends Controller
{
    private $_user;
    public function __construct(User $user)
    {
        $this->_user = $user;
    }

    public function userRegisterView() {
        if(Session::has('user_auth')) {
            return redirect(route('home'));
        }
        return view('user_auth.register');
    }
    public function userLoginView() {
        if(Session::has('user_auth')) {
            return redirect(route('home'));
        }
        return view('user_auth.login');
    }

    public function userLogin(Request $request) {
        $validator = Validator::make($request->input(), [
            'email' => 'required|string|email|exists:users,email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            // Flash::error($validator->errors()->first());
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $user = $this->_user->where('email', $request->email)->first();
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', "Invalid Credentials");
        }

        if(empty($user)) {
            return redirect()->back()->with('error', 'Invalid User, Please Enter Valid Email!');
        }
        if ($user->is_approved == 0) {
            return redirect()->back()->with('error', 'You are not Approved, Please wait for verification!');
        }

        $request->session()->put('user_auth',$user);
        return redirect(route('home'));
    }
    public function userLogout() {
        if (session()->has('user_auth')) {
            session()->put('user_auth', null);
        }
        return redirect(route('home'));
    }
}
