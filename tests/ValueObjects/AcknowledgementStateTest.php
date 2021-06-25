<?php

namespace Simpleclick\GooglePlay\Tests\ValueObjects;

use Simpleclick\GooglePlay\Tests\TestCase;
use Simpleclick\GooglePlay\ValueObjects\AcknowledgementState;

class AcknowledgementStateTest extends TestCase
{
    /**
     * @test
     * @dataProvider stateDataProvider
     * @param $value
     * @param $result
     */
    public function test_isAcknowledged($value, $result)
    {
        $state = new AcknowledgementState($value);
        $this->assertEquals($result, $state->isAcknowledged());
    }

    public function stateDataProvider()
    {
        return [
            [1, true],
            [0, false],
        ];
    }
}
