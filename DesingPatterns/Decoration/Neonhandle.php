<?php

include_once "Decoration.php";

class Neonhandle extends Decoration {

    public function __construct(Weapon $weapon) {
        parent::__construct(5, $weapon);
    }

    public function getDegats() :int {
        print("Styled \n");
        return parent::getDegats();

    }
    
}