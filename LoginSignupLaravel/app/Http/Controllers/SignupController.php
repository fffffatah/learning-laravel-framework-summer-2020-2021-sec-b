<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index(){
        return view('signup.index');
    }

    public function validate(Request $req){
        //todo
    }
}
