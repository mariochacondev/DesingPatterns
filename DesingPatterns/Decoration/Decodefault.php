<?php

include_once "Decoration.php";

class Decodefault extends Decoration {

    public function __construct(Weapon $weapon) {
        parent::__construct(0, $weapon);
    }

}