<?php

/**
 * Une classe pour representer une arme.
 */
class Weapon
{
	public $name;
	public $damage;
    public $price;

	public function __construct($name, $damage, $price)
	{
		$this->name = $name;
        $this->damage = $damage;
        $this->price = $price;
	}
}