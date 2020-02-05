<?php
namespace ApplicationTest\Entity;

use Application\Entity\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    public function testInitialWeightValuesAreNull()
    {
        $weight = new Weight();
        $this->assertNull($weight->getId(), '"id" should be null by default');
        $this->assertNull($weight->getDateCreated(), '"dateCreated" should be null by default');
        $this->assertNull($weight->getWeight(), '"dateCreated" should be null by default');
    }

    public function testWeight()
    {
        $weight = new Weight();
        $random = rand(0, 1000) / 10;
        $weight->setWeight($random);
        $this->assertEquals($random, $weight->getWeight(), 'Weight has been set and get');
    }

    public function testDatetime()
    {
        $weight = new Weight();
        $int = mt_rand();
        $datetime = date("Y-m-d H:i:s", $int);
        $weight->setDateCreated($datetime);
        $this->assertEquals($datetime, $weight->getDateCreated(), 'Weight has been set and get');
    }
}
