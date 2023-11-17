<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function signin() {  //editar y poner los params
        return view('signin');
    }

    public function signup() {
        return view('signup');
    }

}
