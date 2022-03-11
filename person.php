<?php

/**
 * Une classe pour representer une personne.
 */
class Person
{
	public $name;
	public $age;
	public $gender;
	public $health;
	public $maritalStatus;

    private $weapons;
    private $money;

	// $items = ["excalibur", "potion", "cape", "bouclier"];
	// $items[] = "or";
	// ["excalibur", "potion", "cape", "bouclier", "or"]
	private $items;

	public function __construct($name)
	{
		$this->name = $name;

        $this->weapons = [];
        $this->money = 500;
	}

    public function getWeapons()
    {
        return $this->weapons;
    }

    public function getMoney()
    {
        return $this->money;
    }

    public function buyWeapon(Weapon $weapon)
    {
        if ($this->money < $weapon->price) {
            return "Solde insuffisants";
        }

        $this->money -= $weapon->price;
        $this->weapons[] = $weapon;
        return true;
    }

    public function attack(Person $person, Weapon $weapon = null)
    {
        if ($weapon !== null) {
            if (in_array($weapon, $this->weapon)) {
                $person->health -= $weapon->damage;
            } else {
                return false;
            }
        } else {
            $person->health -= 2;
        }
    }
}