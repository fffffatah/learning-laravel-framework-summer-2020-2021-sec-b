<?php
include "back_to_basics.php";

class Another extends Student{
    private $nid;
    function __Construct($nid=""){
        parent::__Construct(2,"DEF","GHI");
        $this->nid=$nid;
    }

    function setNid($nid){
        $this->nid=$nid;
    }

    function getNid(){
        return $this->nid;
    }
}