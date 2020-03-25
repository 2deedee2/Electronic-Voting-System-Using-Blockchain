<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ResultController extends Controller

{
    public function gen_result()
    {
        $result = $this->getChain();
        $str = json_decode($result);
        $all_ballot = array();
        //foreach($str as $v){
        //    echo "index=$v[index]";
        //}
        //echo $str->length;
        //var_dump($str->chain[1]->transactions[0]->ballot);
        foreach($str->chain as $i){
            if($i->index == 1 ){
                continue;
            }else{
                array_push($all_ballot,$i->transactions[0]->ballot);
                //var_dump($i->transactions[0]->ballot);
            }
        }
        $array2str = implode(',',$all_ballot);
        //new empty array
        $check_array = array('1'=>'','2'=>'','3'=>'','4'=>'','5'=>'','6'=>'');
        $check_repeat = array();
        for($i=1;$i<=6;$i++){
            $check = substr_count($array2str,$i);
            array_push($check_repeat,$check);
            $check_array["$i"] = $check;
        }

        //各人得票
        $final_ballot = $check_array;

        //最大值得票者
        reset($check_array);
        arsort($check_array);
        $value_of_max = max($check_array);
        $key_of_max = key($check_array);

        $num = 0;
        foreach(array_slice($check_repeat,1) as $i){
            if(max($check_repeat) == $i){
                //echo $i . "</br>";
                $num +=1;
                break;
            }
        }
        //prepear pi chart data
        $can1 = $final_ballot[1];
        $can2 = $final_ballot[2];
        $can3 = $final_ballot[3];
        $can4 = $final_ballot[4];
        $can5 = $final_ballot[5];
        $can6 = $final_ballot[6];
        //echo max($check_repeat) . "</br>";
        //echo $num . "</br>";
        ///////---------------------------
        //TODO: Fix Problem
        //Only first one can work

        if($num > 0){
            $num = 0;
            session()->flash('danger','Vote again!');
            //var_dump($check_repeat);
            return redirect()->route('home');
        }else{
            $num = 0;
            $winner = 'Candidate ' . $key_of_max;
            $eleTitle = "2020 Student Union Election";
            return view('election.result',[
                'winner'=>$winner,
                'eleTitle'=>$eleTitle,
                'can1'=>$can1,
                'can2'=>$can2,
                'can3'=>$can3,
                'can4'=>$can4,
                'can5'=>$can5,
                'can6'=>$can6,
            ]);
        }




    }

    public function show_result()
    {
        return view('election.result');
    }



    public function getChain()
    {
        //$nodeAddress = "http://localhost:5001";
        $client = new \GuzzleHttp\Client();
        $url = $this->getURL();
        $response = $client->request('GET', "$url/chain");
        $result = $response->getBody();
        return $result;
    }

    public function getURL()
    {
        //return $url = 'http://192.168.31.173:8080';

        //Macdonload Temp address
        return $url = 'http://10.192.48.102:5000';
    }
}
