<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Newsletter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     *user dashboard
     */

    public function index()
    {
        return view('frontend.pages.dashboard.index');
    }

    /**
     *edit profile 
     */

    public function editprofile()
    {
        return view('frontend.pages.user-profile.uesr-profile');
    }

    /**
     * update profile
     */

    public function updateprofile(Request $request)
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
     *change password
     */

    public function editpassword()
    {
        return view('frontend.pages.user-profile.change-password');
    }

    /**
     * update profile
     */

    public function updatepassword(Request $request)
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

    /**
     * newsletter
     */
    public function newsletter()
    {
        $newletter = Newsletter::where('user_id', Auth::id())->latest()->paginate(20);
        return view('frontend.pages.user-profile.user-newsletter', compact('newletter'));
    }

    /**
     * contact message
     */
    public function contactmessage()
    {
        $contactmessage = ContactMessage::where('user_id', Auth::id())->latest()->paginate(20);
        return view('frontend.pages.user-profile.user-contactmessage', compact('contactmessage'));
    }
}
