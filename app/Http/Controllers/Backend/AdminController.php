<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alladminaccount = User::where('role', 'admin')->get();
        return view('backend.pages.admin-account.index', compact('alladminaccount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $allrole = Role::all();
        return view('backend.pages.admin-account.create', compact('allrole'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return($request->all());

        $request->validate([
            'roles' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required',
        ]);

        // profile image
        if ($request->hasFile('profile')) {
            $profile = $request->file('profile');
            $name = hexdec(uniqid()) . '.' . $profile->getClientOriginalExtension();
            $url = "upload/profile/admin/" . $name;
            $profile->move(public_path("upload/profile/admin/"), $name);
        }


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->profile = isset($url) ? $url : '';
        $user->role = 'admin';
        $user->created_at = now();
        $user->save();

        $user->syncRoles($request->roles);



        notyf()->success('Admin account create success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = User::findOrFail($id);
        $allrole = Role::all();
        return view('backend.pages.admin-account.edit', compact('admin', 'allrole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $admin = User::findOrFail($id);
        $request->validate([
            'roles' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'username' => 'required|unique:users,username,' . $id,
            'password' => 'required',
        ]);

        // profile image
        if ($request->hasFile('profile')) {
            $profile = $request->file('profile');
            $name = hexdec(uniqid()) . '.' . $profile->getClientOriginalExtension();
            $url = "upload/profile/admin/" . $name;
            $profile->move(public_path("upload/profile/admin/"), $name);
            if (file_exists($admin->profile)) {
                unlink($admin->profile);
            }
        }


        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->profile = isset($url) ? $url : $admin->profile;
        $user->role = 'admin';
        $user->updated_at = now();
        $user->save();

        if ($request->roles) {
            // $user->roles->detach();
            $roleNames = Role::whereIn('id', (array) $request->roles)->pluck('name')->toArray();
            $user->assignRole($roleNames);
        }

        notyf()->success('Admin account create success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = User::findOrFail($id);
        if (file_exists($admin->profile)) {
            unlink($admin->profile);
        }
        $admin->delete();

        notyf()->warning('Admin delete sucess');
        return back();
    }
}
