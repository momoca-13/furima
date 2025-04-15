<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;

class UserController extends Controller
{
    public function login(LoginRequest $request)
    {
        return view('login');
    }

    public function register(RegisterRequest $request)
    {
        return redirect()->route('profile');
    }
}
