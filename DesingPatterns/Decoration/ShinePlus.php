<?php

include_once "Decoration.php";

class Shineplus extends Decoration {

    public function __construct(Weapon $weapon) {
        parent::__construct(1, $weapon);
    }
    
}