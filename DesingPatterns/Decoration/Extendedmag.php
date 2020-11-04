<?php

include_once "Decoration.php";

class Extendedmag extends Decoration {

    public function __construct(Weapon $weapon) {
        parent::__construct(3, $weapon);
    }

    public function getDegats() :int {
        print("Plus de tire \n");
        return parent::getDegats();

    }

    
}