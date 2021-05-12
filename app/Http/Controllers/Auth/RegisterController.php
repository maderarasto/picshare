<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegister() : View
    {
        return view('auth.register');
    }

    public function register(Request $request) : RedirectResponse
    {
        $this->validate($request, [
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        User::query()->create($request->except('password_confirmation'));

        return redirect()->route('login.show')
            ->with(['message' => 'The registration was successful. Now you can log in.']);
    }
}
