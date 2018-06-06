<?php

declare(strict_types=1);

namespace BrickLib\Importer;

use BrickLib\Brick;
use BrickLib\Collection;
use BrickLib\Color;
use BrickLib\Design;
use BrickLib\Lot;
use SimpleXMLElement;
use SplFileInfo;

class LxfmlImporter implements ImporterInterface
{
    public function readFile(SplFileInfo $fileInfo): Collection
    {
        $xmlRoot = new SimpleXMLElement(file_get_contents($fileInfo->getRealPath()));
        $collection = Collection::createEmptyCollection();

        foreach ($xmlRoot->Bricks->children() as $brick) {
            $collection->add(
                Lot::create(
                    Brick::create(
                        Design::fromLddDesignNumber((int) $brick['designID']),
                        Color::fromLddColor((int) $brick->Part[0]['materials'])
                    ),
                    1
                )
            );
        }

        return $collection;
    }
}
