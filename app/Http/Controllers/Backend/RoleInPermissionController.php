<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RoleInPermissionController extends Controller
{
    /**
     * all role in permission
     */

    public function allroleinpermission()
    {
        $allrole = Role::all();
        return view('backend.pages.role-in-permission.index', compact(['allrole']));
    }

    /**
     * add role in permission
     */

    public function addroleinpermission()
    {
        $allrole = Role::all();
        $allpermissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('backend.pages.role-in-permission.create', compact(['allrole', 'allpermissions', 'permission_groups']));
    }

    /**
     * sotore role in permission
     */
    public function storeroleinpermission(Request $request)
    {
        // return($request->all());

        // validate data
        $request->validate([
            'role_id' => 'required',
        ]);

        $data = array();
        $permissions = $request->permission;

        foreach ($permissions as $key => $item) {
            $data['role_id'] = $request->role_id;
            $data['permission_id'] = $item;

            DB::table('role_has_permissions')->insert($data);
        }

        notyf()->success('Role Permission Added Successfully');
        return back();
    } // End Method


    /**
     * edit role in permission
     */

    public function editroleinpermission($id)
    {
        $role = Role::findOrFail($id);
        $allrole = Role::all();
        $allpermissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('backend.pages.role-in-permission.edit', compact(['allrole', 'allpermissions', 'permission_groups', 'role']));
    }


    public function updateroleinpermission(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $permissionIds = $request->permission;

        if (!empty($permissionIds)) {
            // Convert IDs to names
            $permissionNames = Permission::whereIn('id', $permissionIds)
                ->pluck('name')
                ->toArray();

            $role->syncPermissions($permissionNames);
        }

        notyf()->success('Role Permission updated successfully');
        return redirect()->route('admin.all.role.in.permission');
    } // End Method 


    /**
     * delete role in permission
     */
    public function deleteroleinpermission($id)
    {
        Role::findOrFail($id)->delete();

        // notification
        notyf()->warning('Role Permission delete Successfully');
        return back();
    }
}
