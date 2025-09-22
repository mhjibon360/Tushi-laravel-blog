<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback(Request $request)
    {

        // dd($request->all());

        $facebookUser = Socialite::driver('facebook')->user();

        $user = User::updateOrCreate([
            'facebook_id' => $facebookUser->getId(),
        ], [
            'name' => $facebookUser->getName(),
            'email' => $facebookUser->getEmail(),
            'facebook_token' => $facebookUser->token,
        ]);

        Auth::login($user);

        return redirect()->intended('/dashboard'); // or wherever
    }
}
