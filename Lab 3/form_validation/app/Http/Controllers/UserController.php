<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = $this->getUserList();
        return view('user.list')->with('userList', $users);
    }

    public function findUser($id){
        $users = $this->getUserList();
        foreach($users as $u){
            if($u['id'] == $id){
                return $u;
            }
        }
        return false;
    }

    public function details($id){
        $user = $this->findUser($id);
        return view('user.details')->with('user', $user);
    }

    public function create(){
        return view('user.create');
    }

    public function insert(Request $req){
        $users = $this->getUserList();
        $user = ['id'=>$req->id, 'name'=>$req->uname, 'email'=>$req->email];
        array_push($users, $user);
        return view('user.list')->with('userList', $users);
    }

    public function edit($id){
        $user = $this->findUser($id);
        return view('user.edit')->with('user', $user);
    }

    public function update(Request $req, $id){
        $users = $this->getUserList();
        $user = ['id'=>$req->id, 'name'=>$req->uname, 'email'=>$req->email];
        for($i = 0; $i<sizeof($users); $i++){
            if($users[$i]['id'] == $id){
                $users[$i] = $user;
            }
        }
        return view('user.list')->with('userList', $users);
    }

    public function delete( $id){
        $user = $this->findUser($id);
        return view('user.delete')->with('user', $user);
    }

    public function destroy($id){
        $users = $this->getUserList();
        for($i = 0; $i<sizeof($users); $i++){
            if($users[$i]['id'] == $id){
                unset($users[$i]);
                break;
            }
        }
        return view('user.list')->with('userList', $users);
    }


    public function getUserList(){
        return [
            ['id'=>1, 'name'=>'noorullah', 'email'=>'email@email.com'],
            ['id'=>2, 'name'=>'abc', 'email'=>'abc@email.com'],
            ['id'=>3, 'name'=>'xyz', 'email'=>'xyz@email.com']
        ];
    }
}
