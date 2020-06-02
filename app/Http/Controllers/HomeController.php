<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function authenticate()
    {
        $email = 'laravelsnsblog@guest.com';
        $password = 'laravelsnsblog';

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // 認証に成功した
            return redirect('/articles')->with('flash_message', 'ログインしました。');
        }
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $authUser = Auth::user(); // 認証ユーザー取得
        return view('home');
    }
}
