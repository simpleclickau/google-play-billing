<?php

namespace Simpleclick\GooglePlay\Tests\ValueObjects;

use Simpleclick\GooglePlay\ValueObjects\PromotionType;
use PHPUnit\Framework\TestCase;

class PromotionTypeTest extends TestCase
{
    /**
     * @test
     */
    public function test_generate_promotion_code()
    {
        $promotionCode = PromotionType::generatePromotionCode(5);
        $this->assertEquals(5, strlen($promotionCode));
    }
}
