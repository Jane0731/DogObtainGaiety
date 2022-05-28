<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return 301 
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $userSocial  = Socialite::driver('google')->user();

        $users = User::where(['email' => $userSocial->email])->first();
        if ($users) {
            Auth::login($users);
            session()->put('user_id',$users->user_id);
            session()->put('name', $userSocial->name);
            session()->put('email', $userSocial->email);
            if (Gate::allows('admin')) {
                return redirect()->action('App\Http\Controllers\BKUserController@index');
            } else {
                return view('front.member');
            }
        } else {
            $users = User::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'role'         => User::ROLE_USER
            ]);
         return redirect('/login');
        }
    }
}
