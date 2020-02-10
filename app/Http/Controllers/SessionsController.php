<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request,[
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);
        // validate account
        if(Auth::attempt($credentials)){
            session()->flash('success','Login Successful!');
            //return redirect()->route('home',[Auth::user()]);
            return redirect()->route('home');
        } else {
            session()->flash('danger','Email or Password is incorrect!');
            return redirect()->route('login');
        }


        return;
    }

    public function destory()
    {
        Auth::logout();
        session()->flash('success','Logout Successful!');
        return redirect('login');
    }
}
