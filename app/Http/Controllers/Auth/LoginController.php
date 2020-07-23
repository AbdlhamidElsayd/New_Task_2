<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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

    
    public function login(Request $request)
    {
        $field  = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';
        if (Auth::attempt([$field => $request->login, 'password' => $request->password])) {
            return redirect()->route('home', User::where($field, $request->login)->firstOrFail()->id);
        }else {
            return redirect()->route('login')->withErrors(['field_name' => ['The email or password is incorrect']]);
        }
    }

    public function redirect_login(Request $request)
    {
        session()->put('status',$request->status );
        return Socialite::driver('facebook')->redirect();
    }

    public function callback_login()
    {
        $user = Socialite::driver('facebook')->user();
        $find_user = \App\User::where('email' ,$user->email )->first();
        if($find_user){
            auth()->login($find_user);
            return redirect()->to('/')->with(['status' => 'success', 'message' => __('login with facebook successfully')]);
        }else{
            if(Session::has('status')){
                if(session('status') == 'login'){
                    return redirect()->to('/')->with(['status' => 'error', 'message' => __('you don\'t have an account')]);
                }else{
                    $user = User::create([
                        'email' => $user->getEmail(),
                        'name' => $user->getName(),
                        'password' => md5(rand(1,10000)),
                    ]);
                    auth()->login($user);
                    return redirect()->to('/')->with(['status' => 'success', 'message' => __('Register with facebook successfully')]);
                }
            } else{
                return redirect()->to('/')->with(['status' => 'error', 'message' => __('Failed Authentication')]);
            }
        }
    }
}
