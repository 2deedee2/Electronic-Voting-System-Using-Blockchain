<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ballot;
use RealRashid\SweetAlert\Facades\Alert;


class StatusController extends Controller
{
    public function start()
    {
        $data = Ballot::where('title','=','2020 Student Union Election')->first();
        $data->status = 1;
        $data->save();
        Alert::success('Success!',"The $data->title is started.");
        return redirect()->route('home');
    }

    public function close()
    {
        $data = Ballot::where('title','=','2020 Student Union Election')->first();
        $data->status = 0;
        $data->save();
        Alert::success('Success!',"The $data->title is closed.");
        return redirect()->route('home');
    }
}
