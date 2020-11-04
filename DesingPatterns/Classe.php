<?php

include_once "Caracteristic.php";

abstract class Classe extends Caracteristic
{

    public function __construct(int $degats){
        parent::__construct($degats);

    }



}