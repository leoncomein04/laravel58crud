<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //
    public function displayName(){
        $username="user1";
        $password="pass1";
        return view('sample'->with(compact('username','password')));
    }
}
