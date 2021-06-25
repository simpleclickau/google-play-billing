<?php

namespace Simpleclick\GooglePlay\Tests\ValueObjects;

use Simpleclick\GooglePlay\Tests\TestCase;
use Simpleclick\GooglePlay\ValueObjects\ConsumptionState;

class ConsumptionStateTest extends TestCase
{
    /**
     * @test
     * @dataProvider stateDataProvider
     * @param $value
     * @param $result
     */
    public function testIsConsumed($value, $result)
    {
        $consumptionState = new ConsumptionState($value);
        $this->assertEquals($result, $consumptionState->isConsumed());
    }

    public function stateDataProvider()
    {
        return [
            [0, false],
            [1, true],
        ];
    }
}
