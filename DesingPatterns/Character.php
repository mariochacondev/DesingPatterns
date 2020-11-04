<?php

include_once "Race.php";
include_once "Classe.php";


class Character 
{

    private Classe $classe;
    private Race $race;
    private string $name;
    private int $level;
    private Weapon $weapon;

    public function __construct(string $name, Classe $classe, Race $race, Weapon $weapon)
    {
        $this->setName($name);
        $this->setClasse($classe);
        $this->setRace($race);
        $this->setLevel(1);
        $this->setWeapon($weapon);
    }

    public function getWeapon(): Weapon {
        return $this->weapon;
    }


    public function setWeapon(Weapon $weapon) : void {
        $this->weapon = $weapon;
    }



    public function hit() : void{
        print($this->getRace()->getDegats() + $this->getClasse()->getDegats() * $this->getLevel() + $this->getWeapon()->getDegats());
        print("\n");
    }

    public function levelUp() : void{
        $this->setLevel($this->getLevel() +1);
    }

    public function getLevel(): int {
        return $this->level;
    }


    public function setLevel(int $level) : void {
        $this->level = $level;
    }




    public function getClasse() :Classe {
        return $this->classe;
    }


    public function setClasse(Classe $classe) : void {
        $this->classe = $classe;
    }

    public function getRace() :Race {
        return $this->race;
    }


    public function setRace(Race $race): void {
        $this->race = $race;
    }

    public function getName(): string {
        return $this->name;
    }


    public function setName(string $name): void {
        $this->name = $name;
    }




}