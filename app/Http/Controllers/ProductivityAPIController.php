<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class ProductivityAPIController extends Controller
{
    

    public function list(Request $request){

      $token = "9KwnWuopFvyah0NFml0fLGG8ATu4gAsU";
      $value1 = $request->input("q");
      $value2 = $request->input("language");

      if(is_null($request)){
        $data = Http::get("http://dataservice.accuweather.com/locations/v1/cities/ipaddress?apikey=$token&q=192.168.23.4")->json();
        return view("welcome", ['data'=>$data]);
      }

      
      $data = Http::get("http://dataservice.accuweather.com/locations/v1/cities/ipaddress?apikey=9KwnWuopFvyah0NFml0fLGG8ATu4gAsU&q=192.168.23.4")->json();
      
      return view("welcome", ['data'=>$data]);
    }
}
