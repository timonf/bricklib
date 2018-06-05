<?php

declare(strict_types=1);

namespace BrickLib\Writer;

interface WriterInterface
{
    public function write(string $line): void;
    public function flush(): void;
}
