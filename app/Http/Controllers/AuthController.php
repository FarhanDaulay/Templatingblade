<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(Request $request){
        $name = $request["firstname"] ." " . $request["lastname"];
        return view('welcome1', ['name' => $name]);
    }

}
