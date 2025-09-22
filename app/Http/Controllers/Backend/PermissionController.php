<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allpermission = Permission::all();
        return view('backend.pages.permission.index', compact('allpermission'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // vldiate data
        $request->validate([
            'name' => 'required|string',
            'group_name' => 'required',
        ]);


        // store permission
        Permission::create([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        // notification
        notyf()->success('Permission inserted success');
        return back();
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $permission = Permission::findOrFail($id);
        return view('backend.pages.permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { // vldiate data
        $request->validate([
            'name' => 'required|string',
            'group_name' => 'required|string',
        ]);

        // store data
        Permission::where('id', $id)->update([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        // notification
        notyf()->info('Permission update success');
        return redirect()->route('admin.permission.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Permission::findOrFail($id)->delete();
        // notification
        notyf()->warning('Permission delete success');
        return back();
    }
}
