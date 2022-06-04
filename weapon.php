<?php
/**
 * Classe pour les armes.
 */
class Weapon {

    public $name;
    public $damage;
    public $price;

    public function __construct(string $name, int $damage, int $price)
    {
        $this->name = $name;
        $this->damage = $damage;
        $this->price = $price;
    }

}