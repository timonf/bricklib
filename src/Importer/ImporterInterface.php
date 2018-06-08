<?php

declare(strict_types=1);

namespace BrickLib\Importer;

use BrickLib\Collection;
use SplFileInfo;

interface ImporterInterface
{
    public function readFile(SplFileInfo $fileInfo): Collection;
    public function supports(SplFileInfo $fileInfo): bool;
}
