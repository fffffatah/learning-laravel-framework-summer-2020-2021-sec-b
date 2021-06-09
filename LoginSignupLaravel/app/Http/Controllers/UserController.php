<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users  = [
                ['id'=>1, 'fullname'=>'abc', 'username'=>'jkl', 'email'=>'email@email.com'],
                ['id'=>2, 'fullname'=>'def', 'username'=>'jkl', 'email'=>'abc@email.com'],
                ['id'=>3, 'fullname'=>'ghi', 'username'=>'jkl', 'email'=>'xyz@email.com']
        ];
        return view('user.list')->with('userList', $users);
    }

    public function details($id){
        //echo $id;
    }
}
