<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Utils\Constant;
use App\Models\Province;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AllUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role', '!=', Constant::ADMIN)->get();
        return view('all_users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('all_users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $role = Role::find($request->role);
         /** @var User $blog */
         $user = User::create([
             'name' => $request->name,
             'email' => $request->email,
             'phone' => $request->phone,
             'address' => $request->address,
             'province_id' => $request->province_id,
             'city' => $request->city,
             'role' => $role->name,
             'role_id' => $request->role,
             'password' => Hash::make($request->password),
             'is_active' => 1
         ]);

         Flash::success('User saved successfully.');

         return redirect(route('all_users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $user->is_new = 0;
        $user->update();
        return view('all_users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd('dchu');
        $user = User::find($id);
        $user->is_new = 0;
        $user->update();
        return view('all_users.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /** @var User $zone */
        $user = User::find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('all_users.index'));
        }

        $user->fill($request->all());
        $user->save();

        Flash::success('User updated successfully.');

        return redirect(route('all_users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /** @var User $blog */
        $user = User::find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('all_users.index'));
        }

        $user->delete();
        return redirect()->route('all_users.index')->with('success', 'User Deleted Successfully!');
    }

    public function approvedUser($id)
    {
        $user = User::find($id);
        $user->is_approved = 1;
        $user->is_new = 0;
        $user->update();
        return redirect()->route('all_users.index')->with('success', 'User Approved Successfully!');
    }

    public function rejectUser(Request $request)
    {
        $user = User::find($request->id);
        $user->is_approved = 2;
        $user->update();
        return redirect()->route('all_users.index')->with('success', 'User Rejected Successfully!');
    }
}
