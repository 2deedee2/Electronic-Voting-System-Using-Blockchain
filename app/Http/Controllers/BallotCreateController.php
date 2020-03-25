<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BallotCreateController extends Controller
{
    public function insert()
    {
        DB::insert('INSERT INTO ballots (title, content, startAt, closeAt, status) VALUES(
            "2020 Student Union Election",
            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum provident omnis hic placeat ad dolore quibusdam minima ipsum rem eos? Esse ducimus unde tempora cupiditate ea reiciendis consequatur recusandae facere.",
            "2020-02-15",
            "2020-02-15",
            FALSE
        )');
    }

    public function get()
    {
        $data = DB::table('ballots')
            ->select('id','title','status')
            ->where('title','=','2020 Student Union Election')
            //->value('title');
            ->get();
        dump($data->toArray());
    }
}
