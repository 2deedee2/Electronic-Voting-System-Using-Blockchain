<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class UsersController extends Controller
{
    public function register()
    {
       return view('users.register');
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

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);
        session()->flash('success',"Welcom to the Blockchain Voting System");
        return redirect()->route('users.show',[$user]);
    }
}
