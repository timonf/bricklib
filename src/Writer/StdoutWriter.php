<?php

declare(strict_types=1);

namespace BrickLib\Writer;

class StdoutWriter implements WriterInterface
{
    public function write(string $line): void
    {
        echo $line . PHP_EOL;
    }

    public function flush(): void
    {
    }
}
