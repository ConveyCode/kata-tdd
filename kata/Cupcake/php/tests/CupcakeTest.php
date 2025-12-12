<?php

namespace Cupcake\Tests;

use Cupcake\Request;
use PHPUnit\Framework\TestCase;

final class CupcakeTest extends TestCase
{
    /**
     * @dataProvider provideIngredients
     */
    public function testIngredient(string $ingredientNames, string $expectedEmoji): void
    {
        $result = Request::fromEntry($ingredientNames);
        $this->assertEquals($expectedEmoji, (string) $result);
    }

    public static function provideIngredients(): array
    {
        return [
            ['cupcake', '🧁'],
            ['cookie', '🍪'],
            ['nuts', '🥜'],
            ['chocolate', '🍫'],
            ['banana', '🍌'],
            ['banana with chocolate', '🍌 with 🍫'],
            ['chocolate with banana', '🍫 with 🍌'],
            ['cupcake with nuts', '🧁 with 🥜'],
            ['cookie with chocolate', '🍪 with 🍫'],
            ['cookie with chocolate and banana', '🍪 with 🍫 and 🍌'],
            ['cupcake with cookie with nuts with chocolate and banana', '🧁 with 🍪 with 🥜 with 🍫 and 🍌']
        ];
    }

    public function testInvalidIngredient(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid ingredient');

        Request::fromEntry('invalid');
    }
}
