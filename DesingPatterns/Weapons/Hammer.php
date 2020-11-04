<?php

include_once "Weapon.php";

class Hammer extends Weapon {
    public function __construct(){
        parent::__construct(4);
    }
} 