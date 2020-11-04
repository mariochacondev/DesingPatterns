<?php
include_once "Caracteristic.php";

abstract class Weapon extends Caracteristic {

    public function __construct(int $degats){
        parent::__construct($degats);

    }

}