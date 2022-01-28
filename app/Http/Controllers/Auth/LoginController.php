<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Laravel\Socialite\Facades\Socialite;

use App\Models\User;

use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // google login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // google callback
    public function handleGoogleCallback()
    {
        $social_user = Socialite::driver('google')->user(); 

        // check email first
        $user = User::where('email', $social_user->email)->first();

        if (!$user) {
            $user = new User;
            $user->provider_id = $social_user->id;
            $user->name = $social_user->name;
            $user->email = $social_user->email;
            $user->avatar = $social_user->avatar;
            $user->is_accepted = 1;

            $user->save();
        }


        Auth::login($user);

        // dd(session()->all());

        return redirect('/');
    }

    // facebook login
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    // facebook callback
    public function handleFacebookCallback()
    {
        $social_user = Socialite::driver('facebook')->user();
        // dd($social_user);
        // check email first
        $user = User::where('email', $social_user->email)->first();

        if (!$user) {
            $user = new User;
            $user->provider_id = $social_user->id;
            $user->name = $social_user->name;
            $user->email = $social_user->email;
            $user->avatar = $social_user->avatar;
            $user->is_accepted = 1;

            $user->save();
        }

        Auth::login($user);

        return redirect('/');
    }
}
