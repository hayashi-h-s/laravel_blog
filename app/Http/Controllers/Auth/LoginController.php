<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // use AuthenticatesUsers;
    use AuthenticatesUsers {
        logout as performLogout;
    }

    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect('/')->with('flash_message', 'ログアウトしました。');
    }

    /**
     * 認証を処理する
     *
     * @return Response
     */
    public function authenticate()
    {
        $email = 'laraveblog@guest.com';
        $password = 'laraveblog';

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // 認証に成功した
            return redirect('/articles')->with('flash_message', 'ログインしました。');
        }
    }
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    // protected $redirectTo = '/articles';

    protected function redirectTo() {
        // $authUser = Auth::user(); // 認証ユーザー取得
        session()->flash('flash_message', 'ログインしました');
        // return redirect('/articles')->with('flash_message', 'ログインしました');
        // return redirect()->route('articles.index');
        return '/articles';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        return '/articles';
    }
}
