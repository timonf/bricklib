<?php

declare(strict_types=1);

namespace BrickLib\Exception;

use Throwable;

class FileExtensionException extends BaseException
{
    public function __construct($expectedExtension, string $givenFileName, Throwable $previous = null)
    {
        parent::__construct(sprintf(
            'Expected file extension ".%s", but file "%s" was given.',
            is_array($expectedExtension) ? implode(', ".', $expectedExtension) : $expectedExtension,
            $givenFileName
        ), 0, $previous);
    }
}
