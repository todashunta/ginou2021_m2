<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function auth(Request $request)
    {
        $check = $request->only('name', 'password');
        if (Auth::attempt($check)) {
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::HOME);
        }
        return back()->withErrors([
            'message' => 'ユーザー名またはパスワードが正しくありません'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(RouteServiceProvider::HOME);
    }
}
