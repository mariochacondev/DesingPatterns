<?php

include_once "Caracteristic.php";

abstract class Race extends Caracteristic
{
    public function __construct(int $degats){
        parent::__construct($degats);

    }


}