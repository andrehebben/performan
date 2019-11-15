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
    }
}
