<?php

abstract class Decoration extends Weapon {

    private Weapon $weapon;
    private int $degatsdeco;

    public function __construct(int $degatsdeco, Weapon $weapon) {
        $this->setDegatsdeco($degatsdeco);
        $this->setWeapon($weapon);
        parent::__construct(0);

    }

    public function getWeapon(): Weapon {
        return $this->weapon;
    }


    public function setWeapon(Weapon $weapon) : void {
        $this->weapon = $weapon;
    }

    public function getDegats() :int {
        return $this->getWeapon()->getDegats() + $this->getDegatsdeco();
    }

    public function setDegatsdeco(int $degatsdeco) : void {
        $this->degatsdeco = $degatsdeco;
    }

    public function getDegatsdeco() :int {
        return $this->degatsdeco;
    }

    
}