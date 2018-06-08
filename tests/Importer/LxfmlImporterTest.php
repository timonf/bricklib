<?php

declare(strict_types=1);

namespace BrickLib\Test\Importer;

use BrickLib\Importer\LxfmlImporter;
use BrickLib\Lot;
use PHPUnit\Framework\TestCase;
use SplFileInfo;

class LxfmlImporterTest extends TestCase
{
    public function testReadRainbowFile()
    {
        $file = new SplFileInfo(__DIR__ . '/../data/rainbow.lxfml');
        $importer = new LxfmlImporter();

        $collection = $importer->readFile($file);

        $this->assertCount(16, $collection);

        foreach ($collection as $lot) {
            /** @var Lot $lot */

            // rainbow test file contains only of 16 different 2×4 bricks (3001) in different colors.
            $this->assertEquals(1, $lot->getQuantity());
            $this->assertEquals('3001', $lot->getBrick()->getDesign()->toBrickLinkDesign());
        }
    }

    public function testReadLoveFile()
    {
        $file = new SplFileInfo(__DIR__ . '/../data/love.lxfml');
        $importer = new LxfmlImporter();

        $collection = $importer->readFile($file);

        $this->assertCount(1, $collection);

        /** @var Lot $lot */
        $lot = iterator_to_array($collection)[0];
        $this->assertEquals('3176', $lot->getBrick()->getDesign()->toBrickLinkDesign());
    }
}
