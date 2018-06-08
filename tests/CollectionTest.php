<?php

declare(strict_types=1);

namespace BrickLib\Test;

use BrickLib\Brick;
use BrickLib\Collection;
use BrickLib\Color;
use BrickLib\Design;
use BrickLib\Lot;
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    public function testAdd()
    {
        $collection = Collection::createEmptyCollection();

        for ($i = 0; $i < 2; $i++) {
            $collection->add(
                Lot::create(
                    Brick::create(
                        Design::fromLddDesignNumber(3001),
                        Color::fromLddColor(21)
                    ),
                    5
                )
            );
        }

        $this->assertCount(1, $collection);

        /** @var Lot $lot */
        $lot = iterator_to_array($collection)[0];
        $this->assertEquals(10, $lot->getQuantity());
        $this->assertEquals('3001', $lot->getBrick()->getDesign()->toBrickLinkDesign());
        $this->assertEquals(Color::RED, $lot->getBrick()->getColor()->toBrickLinkColor());
    }
}
