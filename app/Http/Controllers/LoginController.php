<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        // validasi
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            if ($request->rememberMe == 'on') {
                $loginExpiredMinutes = 10080;   // 7 days
                $tokenName = Auth::getRecallerName();
                Cookie::queue($tokenName, Cookie::get($tokenName), $loginExpiredMinutes);
            }

            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Your email or password is invalid');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // delete cookie
        $tokenName = Auth::getRecallerName();
        $cookie = Cookie::forget($tokenName);

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->withCookie($cookie);
    }
}
