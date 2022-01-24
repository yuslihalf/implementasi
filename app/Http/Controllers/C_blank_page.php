<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_blank_page extends Controller
{
    //
    public function index(){
        $url = 'https://apicybercampus.unair.ac.id/api/tele/coba2';

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
        curl_setopt($ch, CURLOPT_TIMEOUT, 300);

        $server_output = curl_exec($ch);
        curl_close($ch);

        $arrVal = json_decode($server_output, true);

        // echo $server_output."<br><br>";

        // print_r($arrVal);
        dd($arrVal);
        return view('blank_page');
    }
}
