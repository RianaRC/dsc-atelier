<?php
use PHPUnit\Framework\TestCase;

require_once("person.php");
require_once("weapon.php");

/**
 * Une classe pour les tests
 */
class GameTest extends TestCase
{
    /**
     * Test pour créer une nouvelle personne
     */
	public function testCreateNewPerson()
	{
		$person = new Person("Riana");
		$this->assertEquals("Riana", $person->name);

		$person->name = "Tanjona";
		$this->assertEquals("Tanjona", $person->name);
	}

    /**
     * Acheter et vendre des armes.
     */
    public function testBuyAndSellWeapons()
    {
        $hercule = new Person("Hercules");
        $this->assertEquals(0, count($hercule->getWeapons()));
        $this->assertEquals(500, $hercule->getMoney());

        $excalibur = new Weapon("Excalibur", 40, 100);
        var_dump($excalibur);

        $hercule->buyWeapon($excalibur);
        $herculeWeapons = $hercule->getWeapons();

        $this->assertEquals(1, count($herculeWeapons));
        $this->assertInstanceOf("Weapon", $herculeWeapons[0]);
        $this->assertEquals("Excalibur", $herculeWeapons[0]->name);

        $this->assertEquals(400, $hercule->getMoney());
    }
}