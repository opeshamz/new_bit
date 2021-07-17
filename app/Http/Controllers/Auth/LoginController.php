<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Notifications\TwoFactorCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        //
        if (!$user->userIsActivated()) {

            Auth::logout();

            return redirect('/login')->with('bubu', 'Your account is not activated. Click here <a id="log" href="' . route('code.resend') . '?email=' . $user->email . '">Resend Code</a> to get the activation code again');

            //return redirect('/login')->withEmail($user->email);
        } else {

            if ($user->isAdmin()) {
                return redirect('/admin');
            }

            if ($user->loginSecurity != null && $user->loginSecurity->google2fa_enable) {

                return view('auth.2fa_verify');
            } else {

                return redirect('dashboard');
            }
        }
    }
    // login api
    public function login(Request $request)
    {

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => 'logedin',
            'access_token' => $token,
            'token_type' => 'Bearer',
            'data' => [
                'email' => $user->email,
                'name' => $user->firstname,
                'id' => $user->id

            ]

        ]);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return response()->json(['message' => 'User successfully signed out']);
    }
}
