<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ballot;

class ModelController extends Controller
{
    public function index( Ballot $ballotModel)
    {
        $data = $ballotModel->get();
        dump($data->toArray());
    }

    public function getStatus()
    {
        $data = Ballot::select('id','title','status')
            ->where('title','=','2020 Student Union Election')
            ->value('status');
            //->get();
        dump($data);
    }
}
