<?php

namespace BrickLib\Test\Importer;

use BrickLib\Importer\LddCsvImporter;
use BrickLib\Lot;
use PHPUnit\Framework\TestCase;
use SplFileInfo;

class LddCsvImporterTest extends TestCase
{
    public function testReadRainbowFile()
    {
        $file = new SplFileInfo(__DIR__ . '/../data/rainbow.csv');
        $importer = new LddCsvImporter();

        $collection = $importer->readFile($file);

        $this->assertCount(16, $collection);

        foreach ($collection as $lot) {
            /** @var Lot $lot */

            // rainbow test file contains only of 16 different 2×4 bricks (3001) in different colors.
            $this->assertEquals(1, $lot->getQuantity());
            $this->assertEquals('3001', $lot->getBrick()->getDesign()->toBrickLinkDesign());
        }
    }
}
