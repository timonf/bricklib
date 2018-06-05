<?php

declare(strict_types=1);

namespace BrickLib\Importer;

use BrickLib\Brick;
use BrickLib\Collection;
use BrickLib\Color;
use BrickLib\Design;
use BrickLib\Lot;
use SplFileInfo;

class LddCsvImporter implements ImporterInterface
{
    public function readFile(SplFileInfo $fileInfo): Collection
    {
        $rowNumber = 0;
        $csvFileHandler = fopen($fileInfo->getRealPath(), 'r+');
        $collection = Collection::createEmptyCollection();

        while ($row = fgetcsv($csvFileHandler)) {
            $rowNumber++;

            // table headers
            if ($rowNumber === 1) {
                continue;
            }

            // empty row?
            if (!$row[3]) {
                continue;
            }

            $collection->add(
                Lot::create(
                    Brick::create(
                        Design::fromLddDesignNumber((int) $row[3]),
                        Color::fromLddCsvColor($row[4])
                    ),
                    (int) $row[5] ?? 1
                )
            );
        }

        return $collection;
    }
}
