<?php

declare(strict_types=1);

namespace BrickLib\Exporter;

use BrickLib\Collection;
use BrickLib\Writer\WriterInterface;

interface ExporterInterface
{
    public function export(Collection $collection, WriterInterface $writer): void;
}
