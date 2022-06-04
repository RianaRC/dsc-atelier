<?php
use PHPUnit\Framework\TestCase;

require_once("person.php");
require_once("weapon.php");

/**
 * Une classe pour tester notre jeu.
 */
class GameTest extends TestCase
{
    /**
     * Méthode pour s'initier avec les assertions.
     */
    public function testAssert()
    {
        $name = "Tiana";
        $age = null;
        $number1 = 12;
        $number2 = 66;

        $this->assertEquals("Tiana", $name);
        $this->assertEmpty($age);
        $this->assertGreaterThan($number1, $number2);
    }

    /**
     * Créer notre premier personnage.
     */
    public function testCreatePerson()
    {
        $hercule = new Person("Hercule");

        $this->assertEquals("Hercule", $hercule->name);
        $this->assertEquals(100, $hercule->health);
    }

    /**
     * Créer une arme
     */
    public function testCreateWeapon()
    {
        $weapon = new Weapon("Antsy", 20, 30);

        $this->assertEquals("Antsy", $weapon->name);
        $this->assertEquals(20, $weapon->damage);
    }

    /**
     * Acheter une arme.
     */
    public function testBuyWeapon()
    {
        $goliath = new Person("Goliath");
        $antsy = new Weapon("Antsy", 20, 30);

        $goliathInitialMoney = $goliath->money;

        $this->assertEquals(30, $antsy->price);
        $this->assertEquals(100, $goliathInitialMoney);
        $this->assertEmpty($goliath->weapons);

        $goliath->buyWeapon($antsy);

        $this->assertEquals("Antsy", $goliath->weapons[0]->name);
        $this->assertEquals($goliathInitialMoney - $antsy->price, $goliath->money);
    }

    /**
     * Deux personnes peuvent s'entretuer.
     */
    public function testPersonCanAttack()
    {
        $goliath = new Person("Goliath");
        $david = new Person("David");

        $antsy = new Weapon("Antsy", 20, 30);

        $this->assertEquals(100, $david->health);

        $goliath->attack($david);
        $this->assertEquals(90, $david->health);

        $goliath->buyWeapon($antsy);
        
        $goliath->attack($david, $goliath->weapons[0]);
        $this->assertEquals(70, $david->health);
    }
}