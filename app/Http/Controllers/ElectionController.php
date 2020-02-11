<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class ElectionController extends Controller
{
    public function create()
    {
        return view('election.CanList');
    }

    public function store()
    {
       if  (isset($_POST['1'])){
        $result = $this->PostDataToChain('Joe','777');
        //$result = $this->getChain();
        return $result;
        //session()->flash('success','Your ballot is added into blockchain.');
        //return redirect()->route('home');
       }
       else{
           return "hellpo";
       }

    }

    public function PostDataToChain($uname,$ca)
    {
        $Ballot = array(
            'sender' => "$uname",
            'recipient' => "1ac215e48ad94c3f932fbbcd7dfd1798",
            'ballot' => "$ca"
        );
        $url = $this->getURL();
        $AddBallotUrl = "$url/transactions/new";
        $ch = curl_init($AddBallotUrl);
        $jsonDataEncoded = json_encode($Ballot);
        curl_setopt($ch , CURLOPT_POST , 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        //echo "<h1>Thanks for your participation!</h1>";
        //echo $jsonDataEncoded . "</br>";
        $result = curl_exec($ch);
        return $jsonDataEncoded;
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
        return $url = 'http://192.168.31.173:8080';
    }

    public function postTest($uname,$ca)
    {
        $client = new \GuzzleHttp\Client();
        $url = "http://192.168.31.173:8080/transactions/new";



        $Ballot = [
            'form_params' => [
                'sender' => "$uname",
                'recipient' => "1ac215e48ad94c3f932fbbcd7dfd1798",
                'ballot' => "$ca"
            ]
            ];

        $request = $client->request('POST', $url,  $Ballot);
        $response = $request->send();

        dd($response);
        return $response;
    }
}
