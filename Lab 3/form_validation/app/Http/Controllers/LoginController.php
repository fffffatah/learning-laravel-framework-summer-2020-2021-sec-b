<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function verify(Request $req){
        if($req->uname == $req->password){
            $req->session()->put('uname', $req->uname);
            $req->session()->put('type', $req->uname);
            return redirect('/home');
        }else{
            $req->session()->flash('msg', 'Invaild Username or Password');
            return redirect('/login');
        }
    }
}
