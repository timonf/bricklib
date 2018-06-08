<?php

declare(strict_types=1);

namespace BrickLib\Importer;

use BrickLib\Collection;
use SplFileInfo;
use ZipArchive;

class LxfImporter implements ImporterInterface
{
    private $lxfmlImporter;

    public function __construct()
    {
        $this->lxfmlImporter = new LxfmlImporter();
    }

    public function readFile(SplFileInfo $fileInfo): Collection
    {
        $zipArchive = new ZipArchive();
        $zipArchive->open($fileInfo->getRealPath());

        $tempLxfmlFile = tempnam('/tmp', 'bricklib');
        file_put_contents($tempLxfmlFile, $zipArchive->getFromName('IMAGE100.LXFML'));

        $collection = $this->lxfmlImporter->readFile(new SplFileInfo($tempLxfmlFile));
        unlink($tempLxfmlFile);

        return $collection;
    }

    public function supports(SplFileInfo $fileInfo): bool
    {
        return 'lxf' === strtolower($fileInfo->getExtension());
    }
}
