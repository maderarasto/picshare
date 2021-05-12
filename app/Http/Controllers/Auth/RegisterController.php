<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegister() : View
    {
        return view('auth.register');
    }

    public function register(Request $request) : View
    {

    }
}
