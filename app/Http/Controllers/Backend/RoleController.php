<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allrole = Role::all();
        return view('backend.pages.role.index', compact('allrole'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $allpermissions = Permission::all()->groupBy('group_name');
        // return($allpermissions);
        return view('backend.pages.role.create', compact('allpermissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // return ($request->all());

        // vldiate data
        $request->validate([
            'name' => 'required|string|unique:roles,name',
        ]);

        // store data
        $role = Role::create([
            'name' => $request->name,
        ]);

        $role->syncPermissions($request->permission);

        // notification
        notyf()->success('Role inserted success');
        return back();
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
        $allpermissions = Permission::all()->groupBy('group_name');
        return view('backend.pages.role.edit', compact('role', 'allpermissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return ($request->all());

        // vldiate data
        $request->validate([
            'name' => 'required|string|unique:roles,name,' . $id,
        ]);

        $role=Role::findOrFail($id);
        // store data
        $role->update([
            'name' => $request->name,
        ]);

        $role->syncPermissions($request->permission);
        // notification
        notyf()->info('Role update success');
        return redirect()->route('admin.role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Role::findOrFail($id)->delete();
        // notification
        notyf()->warning('Role delete success');
        return back();
    }
}
