<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function validation(Request $req){
        if(!(empty($req->uname) && empty($req->password))){
            return redirect('/home');
        }
    }
}
