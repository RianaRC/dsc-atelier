<?php
/**
 * Classe pour les personnages.
 */
class Person
{
    public $name;
    public $weapons = [];
    public $money = 100;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->health = 100;
    }

    public function buyWeapon(Weapon $weapon)
    {
        array_push($this->weapons, $weapon);
        $this->money = $this->money - $weapon->price; 
    }

    public function attack(Person $person, Weapon $weapon = null)
    {
        if (!empty($weapon)) {            
            if(in_array($weapon, $this->weapons)){
                $person->health -= $weapon->damage;
            }
        }else {
            $person->health -= 10;
        }
    }

}