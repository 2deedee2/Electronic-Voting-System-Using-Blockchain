<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectionController extends Controller
{
    public function create()
    {
        return view('election.CanList');
    }
}
