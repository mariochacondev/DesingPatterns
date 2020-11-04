<?php

include_once "Decoration.php";

class Diamond extends Decoration {

    public function __construct(Weapon $weapon) {
        parent::__construct(2, $weapon);
    }

    public function getDegats() :int {
        print("Extra Magic \n");
        return parent::getDegats();

    }

}