<?php
//ARRAY
$user = [1,'ABC','DEF'];
$users=[
            [1,'ABC','DEF'],
            [1,'ABC','DEF'],
            [1,'ABC','DEF']
        ];


function sum($a=0, $b=0){ //default value parameter
    return $a+$b;
}
echo sum();

//OOP
class User{
    public $id;
    protected $name;
    private $address;
    function __Construct($id,$name,$address){
        $this->id=$id;
        $this->name=$name;
        $this->address=$address;
    }

    function getAddress(){
        return $this->address;
    }

    function showDetail(){
        return "Address is: ".$this->address;
    }
}

//$u1=new User(1,"ABC","DEF");
//echo $u1->showDetail();

