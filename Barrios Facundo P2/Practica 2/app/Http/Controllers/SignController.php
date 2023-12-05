<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    public function signin() {  //params pasados en la url
        return view('signin')->with(['error' => '']);
    }

    public function signup() {
        return view('signup');
    }

}
