<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('static_pages/home');
    }

    public function login()
    {
        return view('static_pages/login');
    }

    public function register()
    {
        return view('static_pages/register');
    }
}
