<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValoController extends Controller
{
    public function valo(Request $request)
    {
        $data = $request->all();
        $name = $data['name'];
        $API_KEY = "RGAPI-9708eb2a-949d-4503-8d60-c324defa8d43";
        if(isset($name)){
            //サモナーネーム取得
            $name = rawurlencode($name);
            //リージョン取得
            $region = $_POST['region'];
            //url
            $url = "https://${region}.api.riotgames.com/lol/summoner/v4/summoners/by-name/${name}?api_key=${API_KEY}";
            //サモナー情報取得
            $array = json_decode(file_get_contents($url),true);
        }
        return view('valo',compact('array'));
    }

    public function valofrom()
    {
        return view('valofrom');
    }
}
