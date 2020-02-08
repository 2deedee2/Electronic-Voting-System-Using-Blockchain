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

    //User Register
    //Rules
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
        return;
    }
}
