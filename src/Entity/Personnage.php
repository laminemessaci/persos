<?php

namespace App\Entity;
class Personnage {

    public $nom;
    public $age;
    public $sexe;
    public $carac =[];

    public static $personnages = [];

    public function __construct($nom, $age, $sexe, $carac)
    {
        $this -> nom = $nom;
        $this -> age = $age;
        $this -> sexe = $sexe;
        $this -> carac = $carac;

        self::$personnages [] = $this;
        
    }

    public static function crererPersonnages(){

        $p1 = new Personnage("Marc", 25, true, [
            "force" => 100,
            "agi" => 90,
            "intel" => 45

        ]);

        $p2 = new Personnage("Milo", 20, true, [
            "force" => 50,
            "agi" => 100,
            "intel" => 35

        ]);

        $p1 = new Personnage("Tya", 29, false, [
            "force" => 65,
            "agi" => 100,
            "intel" => 75

        ]);
    }

    public static function getPersonnageParNom($nom){

        foreach(self::$personnages as $perso){
            if(strtolower($perso->nom) === $nom){
                return $perso;

            }
        }

    }

}