<?php

include_once "Weapon.php";

class Sword extends Weapon {
    public function __construct(){
        parent::__construct(1);
    }
} 