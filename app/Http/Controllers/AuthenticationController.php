<?php

namespace App\Http\Controllers;

use Flash;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\OrganizationCategory;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
  public function register(){
      $organization = new User;
      $organization_cats = OrganizationCategory::get();
      return view('auth.index', compact('organization', 'organization_cats'));
  }
  public function store(Request $request){
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'phone' => 'required',
        'organization_id' => 'required',
        'address' => 'required'
    ]);
    try {
        $formData = [
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "phone" => $request->phone,
            "organization_id" => $request->organization_id,
            "address" => $request->address           
        ];
        // dd($formData);
        /**  @var User $user */
        (new User())->saveOrganization($formData);
        
        // Flash::success($request->name.''.'Registered Successfully.');
        // $request->cookie('employee_tab', 'employee_commission');
        return redirect('/');
        //code...
    } catch (\Throwable $th) {
        // Flash::success($th->getMessage());
        dd($th->getMessage());
        return redirect(route('register'));
    }
  }
}
