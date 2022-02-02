<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Admin;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
    * Where to redirect users after login.
    *
    * @var string
    */
    protected $redirectTo ="admin/dashboard/content";

    public function __construct()
    {     
        // $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request),
            $request->filled('remember')
        );
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        return redirect()->route('admin.login');
    }

    /**
    * Get the guard to be used during authentication.
    *
    * @return \Illuminate\Contracts\Auth\StatefulGuard
    */
    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function redirectToProviderLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
        // return Socialite::driver('linkedin')->scopes(['r_liteprofile', 'r_emailaddress'])->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        // dd(Socialite::driver('linkedin')->stateless()->user());
        $user = Socialite::driver('linkedin')->stateless()->user();

        $authUser = Admin::where('email', $user->email)->first();
        // dd($authUser);
        // $authUser = $this->findOrCreateUser($user, $provider);
        // Auth::login($authUser, true);
        if($authUser){
            Auth::guard('admin')->login($authUser);
            return redirect()->route('admin.main');
        }else{
            $newUser = new Admin();
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->password = uniqid(); // we dont need password for login
            $newUser->save();
            
            // dd($newUser);
            Auth::login($newUser);
            return redirect()->route('admin.main');
        }
        dd("no if else");
        return redirect($this->redirectTo);
    }

    // public function findOrCreateUser($user, $provider)
    // {
    //     $authUser = Admin::where('provider_id', $user->id)->first();
    //     if ($authUser) {
    //         return $authUser;
    //     }
    //     return Admin::create([
    //         'name'     => $user->name,
    //         'email'    => $user->email,
    //         'provider' => $provider,
    //         'provider_id' => $user->id
    //     ]);
    // }

    // public function handleProviderCallback()
    // {
    //     $user = Socialite::driver('linkedin')->user();
    //     dd($user);
    //     // $user->token;
    // }
}