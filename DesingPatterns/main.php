<?php

include_once "Character.php";
include_once "Classe.php";
include_once "Race.php";
include_once "Humain.php";
include_once "Orc.php";
include_once "Warrior.php";
include_once "Wizard.php";
include_once "Archer.php";
include_once "Elf.php";
include_once "Weapons/Sword.php";
include_once "Decoration/Extendedmag.php";
include_once "Weapons/Ak47.php";
include_once "Decoration/Neonhandle.php";
include_once "Decoration/Diamond.php";
include_once "Weapons/Hammer.php";
include_once "Weapons/RPG.php";



$tonton = new Character("Tonton", new Wizard(), new Elf(),new Neonhandle (new Diamond (new Extendedmag( new Neonhandle(new Ak47())))));
$tonton -> hit();
$tonton -> levelUp();
$tonton -> hit();
$tonton -> levelUp();
$tonton -> hit();
$tati = new Character("Tati", new Archer(), new Orc(), new Neonhandle(new RPG()));
$tati -> hit();
$tati -> setWeapon(new Diamond($tati -> getWeapon()));
$tati -> hit();


