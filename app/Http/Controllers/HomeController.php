<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['home','check_username']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }
    public function check_username(Request $request)
    {
        $user = User::where('user_name', $request->username)->first();
        if (empty($user)) {
            return response()->json(['message' => "success unique username ", 'status' => 'success']);
        } else {
            return response()->json(['message' => " oops! this usernme already existed", 'status' => 'error']);
        }
    }
}
