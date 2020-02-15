<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ballot;

class StaticPagesController extends Controller
{
    public function home()
    {
        $data = Ballot::select('id','title','status')
            ->where('title','=','2020 Student Union Election')
            ->value('status');
            //->get();
        return view('static_pages/home',[
            'status'=>$data
        ]);
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
