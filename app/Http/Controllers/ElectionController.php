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
       if(isset($_POST['1'])){
        $blockNo = $this->PostDataToChain('Joe','1');
        session()->flash('success',"Thanks! Your ballot has been added into blockchain. (Block $blockNo)");
        return redirect()->route('home');
       }
       else if(isset($_POST['2'])){
        $blockNo = $this->PostDataToChain('Joe','2');
        session()->flash('success',"Thanks! Your ballot has been added into blockchain. (Block $blockNo)");
        return redirect()->route('home');
       }
       else if(isset($_POST['3'])){
        $blockNo = $this->PostDataToChain('Joe','3');
        session()->flash('success',"Thanks! Your ballot has been added into blockchain. (Block $blockNo)");
        return redirect()->route('home');
        }
        else if(isset($_POST['4'])){
            $blockNo = $this->PostDataToChain('Joe','4');
            session()->flash('success',"Thanks! Your ballot has been added into blockchain. (Block $blockNo)");
            return redirect()->route('home');
        }
        else if(isset($_POST['5'])){
            $blockNo = $this->PostDataToChain('Joe','5');
            session()->flash('success',"Thanks! Your ballot has been added into blockchain. (Block $blockNo)");
            return redirect()->route('home');
        }
        else if(isset($_POST['6'])){
            $blockNo = $this->PostDataToChain('Joe','6');
            session()->flash('success',"Thanks! Your ballot has been added into blockchain. (Block $blockNo)");
            return redirect()->route('home');
        }

    }

    public function PostDataToChain($uname,$ca)
    {
        $url = $this->getURL();
        $Ballot = array(
            'sender' => "$uname",
            'recipient' => "$url",
            'ballot' => "$ca"
        );
        $AddBallotUrl = "$url/transactions/new";
        $ch = curl_init($AddBallotUrl);
        $jsonDataEncoded = json_encode($Ballot);
        curl_setopt($ch , CURLOPT_POST , 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //echo "<h1>Thanks for your participation!</h1>";
        //echo $jsonDataEncoded . "</br>";
        $respone = curl_exec($ch);
        $str = json_decode($respone);
        $blockNo = $str->indexNo;
        return $blockNo;
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
}
