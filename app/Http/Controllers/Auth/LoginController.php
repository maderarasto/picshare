<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['logout']);
    }

    public function showLogin() : View
    {
        return view('auth.login');
    }

    public function login(Request $request) : RedirectResponse
    {
        Log::alert('LOGIN USER');
        $credentials = $request->only(['username', 'password']);

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard()->attempt($credentials))
        {
            return redirect()->back();
        }

        return redirect()->back()
            ->withInput($request->input())
            ->withErrors([
               'username' => 'The given credentials do not match with our records'
            ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->back();
    }
}
