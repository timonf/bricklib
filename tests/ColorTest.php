<?php

declare(strict_types=1);

namespace BrickLib\Test;

use BrickLib\Color;
use PHPUnit\Framework\TestCase;

class ColorTest extends TestCase
{
    /**
     * @dataProvider getLddColorData
     */
    public function testCreateFromLddColor(int $lddColorNumber, int $expectedBrickLinkColor)
    {
        $color = Color::fromLddColor($lddColorNumber);
        $this->assertEquals($expectedBrickLinkColor, $color->toBrickLinkColor());
    }

    /**
     * @dataProvider getLddCsvStringColorData
     */
    public function testCreateFromLddCsvColor(string $lddColor, int $expectedBrickLinkColor)
    {
        $color = Color::fromLddCsvColor($lddColor);
        $this->assertEquals($expectedBrickLinkColor, $color->toBrickLinkColor());
    }

    public function getLddColorData(): array
    {
        return [
            [1, Color::WHITE],
            [5, Color::TAN],
            [194, Color::LIGHT_BLUISH_GRAY],
        ];
    }

    public function getLddCsvStringColorData(): array
    {
        return [
            ['154 - New Dark Red', Color::DARK_RED],
            ['194 - Medium Stone Grey', Color::LIGHT_BLUISH_GRAY],
            ['1 - White', Color::WHITE],
            ['106 - Bright Orange', Color::ORANGE],
        ];
    }
}
