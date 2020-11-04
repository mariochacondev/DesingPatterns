<?php

include_once "Race.php";

class Human extends Race 
{
    public function __construct(){
        parent::__construct(4);
    }

}