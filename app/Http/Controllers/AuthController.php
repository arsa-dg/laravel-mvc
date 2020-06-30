<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register1(){
        return view("form1");
    }

    public function welcome1(Request $request){
        $namadepan = $request["nama-depan"];
        $namabelakang = $request["nama-belakang"];
        return view("welcome1", ["firstname" => $namadepan, "lastname" => $namabelakang]);
    }
}
