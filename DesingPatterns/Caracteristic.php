<?php

abstract class Caracteristic {

    private int $degats;
    
    public function __construct(int $degats){
        $this->setDegats($degats);
        print("Je suis un " . get_class($this)."\n");

    }

        public function getDegats() :int {
        return $this->degats;
    }


    public function setDegats(int $degats) : void {
        $this->degats = $degats;
    }
    
} 