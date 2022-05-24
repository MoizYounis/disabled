<?php

namespace App\Http\Controllers;

use Response;
use App\Models\Role;
use App\Http\Requests;
use App\Models\Module;
use App\Models\Permission;
use Laracasts\Flash\Flash;
use App\DataTables\RoleDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\AssignRolePermissionsRequest;

class RoleController extends AppBaseController
{
    /**
     * Display a listing of the Role.
     *
     * @param RoleDataTable $roleDataTable
     * @return Response
     */
    public function index(RoleDataTable $roleDataTable)
    {
        return $roleDataTable->render('roles.index');
    }

    /**
     * Show the form for creating a new Role.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created Role in storage.
     *
     * @param CreateRoleRequest $request
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified Role.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Role $role */
        $role = Role::skipAdmin()->find($id);

        if (empty($role)) {
            Flash::error('Role not found');

            return redirect(route('roles.index'));
        }

        $modules = Module::with(['permissions'])->get();

        $user_permissions = $role->permissions()->pluck('id')->toArray();

        return view('roles.show')->with([
            'role' => $role,
            'modules' => $modules,
            'user_permissions' => $user_permissions
        ]);
    }

    /**
     * Show the form for editing the specified Role.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified Role in storage.
     *
     * @param  int              $id
     * @param UpdateRoleRequest $request
     *
     * @return Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified Role from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function assignPermissions(AssignRolePermissionsRequest $request)
    {
        $role = Role::skipAdmin()->findorfail($request->role_id);

        $role->syncPermissions($request->permission);

        return redirect()->back()->with(['message' => 'Permission updated.']);
    }
}
