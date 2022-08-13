<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Utils\Constant;
use App\Events\RegistrationMail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255','alpha'],
            'last_name' => ['required', 'string', 'max:255','alpha'],
            'city' => ['required', 'string', 'max:255','regex:/(^[A-Za-z? ,_-])|(^[a-bA-B0-9? ,_-])+$/'],
            'address' => ['required', 'string', 'max:255','regex:/(^[A-Za-z? ,_-])|(^[a-bA-B0-9? ,_-])+$/'],
            'province' => ['required'],
            'role_id' => ['required'],
            'phone' => ['required','numeric'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $roles = Role::where('id', $data['role_id'])->first();
        if ($data['phone_digits'] != 11) {
            return redirect()->back()->with('error', 'Phone Number Should Be Equal To 11 Digits');
        }
        if (($roles->name ?? "") != Constant::DISABLED || ($roles->name ?? "") != Constant::USER) {
            if(empty($data['file'])) {
                return redirect()->back()->with('error', 'Please Upload Required Document!');
            }
        } else {
            dd("Ni yar");
        }

            $user = User::create([
            'name' => $data['first_name'] . ' ' . $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'province_id' => $data['province'],
            'city' => $data['city'],
            'address' => $data['address'],
            'is_active' => 1,
            'role' => $roles->name,
            'file' => $data['file']->store('file', 'public') ?? null
        ]);
        $user->assignRole($data['role_id']);
        event(new RegistrationMail($user));
        return $user;
    }
}
