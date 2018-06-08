<?php

declare(strict_types=1);

namespace BrickLib\Importer;

use BrickLib\Brick;
use BrickLib\Collection;
use BrickLib\Color;
use BrickLib\Design;
use BrickLib\Lot;
use SplFileInfo;

class LDrawImporter implements ImporterInterface
{
    public function readFile(SplFileInfo $fileInfo): Collection
    {
        $fileHandler = fopen($fileInfo->getRealPath(), 'r');
        $collection = Collection::createEmptyCollection();

        while ($line = fgetcsv($fileHandler, 0, ' ')) {
            if ('1' !== $line[0]) {
                continue;
            }

            $collection->add(
                Lot::create(
                    Brick::create(
                        Design::fromLDrawFilename($line[14]),
                        Color::create((int) $line[1])
                    ),
                    1
                )
            );
        }

        fclose($fileHandler);

        return $collection;
    }

    public function supports(SplFileInfo $fileInfo): bool
    {
        return 'ldr' === strtolower($fileInfo->getExtension());
    }
}
