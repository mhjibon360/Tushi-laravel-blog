<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\If_;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class BackendController extends Controller
{
    /**
     * admin dashboard
     */
    // :View
    function index(): View
    {
        $recentposts = Post::with(['category','author'])->latest()->paginate(10);
        return view('backend.pages.admin-dashboard.index',compact('recentposts'));
    }

    /**
     * admin edit profile
     */
    // :View
    function editprofile(): View
    {
        return view('backend.pages.admn-profile.edit-profile');
    }

    /**
     * admin update profile
     */
    // :View
    function updateprofile(Request $request): RedirectResponse
    {

        $data = User::findOrFail($request->id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $request->id,
            'username' => 'required|unique:users,username,' . $request->id,
        ]);

        // profile image unlink and store new
        if ($request->hasFile('profile')) {
            $profile = $request->file('profile');
            $name = hexdec(uniqid()) . '.' . $profile->getClientOriginalExtension();
            $url = "upload/profile/admin/" . $name;
            $profile->move(public_path("upload/profile/admin/"), $name);
        }

        // update data
        $data->update([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'profile' => isset($url) ? $url : $data->profile,
            'details' => $request->details,
            'twitter' => $request->twitter,
            'linkdin' => $request->linkdin,
            'facebook' => $request->facebook,
            'updated_at' => now(),
        ]);
        // notifications
        notyf()->info('Profile updated success');
        return back();
    }

    /**
     * admin update profile
     */
    // :View
    function updatepassword(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',

        ]);

        if (Hash::check($request->password, Auth::user()->password)) {
            User::where('id', $request->id)->update([
                'password' => Hash::make($request->new_password),
            ]);
            // notifications
            notyf()->info('Password updated success');
            return back();
        } else {
            // notifications
            notyf()->error('Current password doesn\'t match our record');
            return back();
        }
    }
}
