<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    function register(RegisterRequest $request)
    {
        $data = $request->only(['email', 'name', 'password']);
        $data['password'] = bcrypt($data['password']);
        
        return User::create($data);
    }
}
