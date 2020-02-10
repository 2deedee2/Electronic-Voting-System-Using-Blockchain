<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectionController extends Controller
{
    public function create()
    {
        return view('election.CanList');
    }

    public function store()
    {
       if  (isset($_POST['1'])){
        return redirect()->route('home');
       }
       else{
           return "hellpo";
       }

    }

}
