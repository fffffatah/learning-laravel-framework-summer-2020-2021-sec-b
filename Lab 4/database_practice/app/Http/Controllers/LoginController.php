<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function verify(LoginRequest $req){
        $user = User::where('email', $req->login_email)
            ->where('pass', $req->login_pass)
            ->first();

        if($user){
            if(count((array)$user) > 0){
                $req->session()->put('uname', $req->uname);
                return view('dashboard.index');
            }
        }
        else{
            $req->session()->flash('msg', 'Invaild Username or Password');
            return view('login.index');
        }
    }
}
