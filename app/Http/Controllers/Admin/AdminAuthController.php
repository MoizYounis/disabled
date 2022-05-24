<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Utils\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Flash;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{

    private $_user;
    public function __construct(User $user)
    {
        $this->_user = $user;
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->input(), [
            'email' => 'required|string|email|exists:users,email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            Flash::error($validator->errors()->first());
            return redirect()->back();
        }

        $user = $this->_user->where('email', $request->email)->first();
        if (! $user || ! Hash::check($request->password, $user->password)) {
            Flash::error("Invalid Credentials");
            return redirect()->back();
        }

        if ($user->is_active == 0) {
            Flash::error("Your account is inactive.");
            return redirect()->back();
        }

        if ($user->role != Constant::ADMIN) {
            Flash::error('Only Admin can access.');
            return redirect()->back();
        }

        return redirect(route('admin'));

    }
}
