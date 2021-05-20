<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLogin() : View
    {
        return view('auth.admin-login');
    }

    public function login(Request $request) : RedirectResponse
    {
        Log::alert('LOGIN ADMIN');
        $credentials = $request->only([ 'username', 'password' ]);

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials))
        {
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()
            ->withInput($request->input())
            ->withErrors([
                'username' => 'The credentials don\'t match with our records.'
            ]);
    }
}
