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
            'first_name' => ['required', 'string', 'max:255','regex:/(^[A-Za-z? ,_-])/'],
            'last_name' => ['required', 'string', 'max:255','alpha'],
            'city' => ['required', 'string', 'max:255','regex:/(^[A-Za-z? ,_-])|(^[a-bA-B0-9? ,_-])+$/'],
            'address' => ['required', 'string', 'max:255','regex:/(^[A-Za-z? ,_-])|(^[a-bA-B0-9? ,_-])+$/'],
            'province' => ['required'],
            'role_id' => ['required'],
            'phone' => ['required','string', 'phone_number' , 'size:11'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function create(array $data)
    {
        $roles = Role::where('id', $data['role_id'])->first();

        if ($roles->name != Constant::USER && empty($data['file'])) {
           return back()->with('error', 'Try Again and Go To Register Page and, Please Upload Required Document of Your Organization or Your Disability!');
        }

        $image = null;
        if (!empty($data['file'])) {
            $image = $data['file']->store('file', 'public');
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
            'file' => $image
        ]);
        $user->assignRole($data['role_id']);
        $mailData = ['name' => $user->name, 'email' => $user->email, 'role' => $user->role];
        event(new RegistrationMail($mailData));
        return back()->with('success', 'Your Information has been saved successfully. Please Wait for registration Verification');
        // return $user;
    }
}
