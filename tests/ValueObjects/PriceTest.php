<?php

namespace Simpleclick\GooglePlay\Tests\ValueObjects;

use Simpleclick\GooglePlay\ValueObjects\Price;
use PHPUnit\Framework\TestCase;

class PriceTest extends TestCase
{
    /**
     * @test
     */
    public function test_faker()
    {
        $this->assertInstanceOf(Price::class, Price::fake());
        $price = Price::fake(1, 'EGP');
        $this->assertEquals(1, $price->getPriceMicros());
        $this->assertEquals('EGP', $price->getCurrency());
    }
}
