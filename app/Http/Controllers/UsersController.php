<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function register()
    {
       return view('users.register');
    }

    public function login()
    {
        return view('users.login');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
