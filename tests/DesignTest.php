<?php

declare(strict_types=1);

namespace BrickLib\Test;

use BrickLib\Design;
use BrickLib\Exception\FileExtensionException;
use PHPUnit\Framework\TestCase;

class DesignTest extends TestCase
{
    /**
     * @dataProvider getLDrawTestData
     */
    public function testFromLDrawFilename(string $lDrawFilename, string $brickLinkDesign)
    {
        $design = Design::fromLDrawFilename($lDrawFilename);
        $this->assertEquals($brickLinkDesign, $design->toBrickLinkDesign());
    }

    /**
     * @dataProvider getLDrawTestFilenameWithExceptionData
     */
    public function testFromLDrawFilenameWithException(string $lDrawFilename, ?string $exception)
    {
        if (null !== $exception) {
            $this->expectException($exception);
        }

        $design = Design::fromLDrawFilename($lDrawFilename);

        $this->assertInstanceOf(Design::class, $design);
    }

    /**
     * @dataProvider getLddTestData
     */
    public function testFromLddDesignNumber(int $lddDesignNumber, string $brickLinkDesign)
    {
        $design = Design::fromLddDesignNumber($lddDesignNumber);
        $this->assertEquals($brickLinkDesign, $design->toBrickLinkDesign());
    }

    public function getLDrawTestFilenameWithExceptionData(): array
    {
        return [
            ['3001.dat', null],
            ['3001', FileExtensionException::class],
            ['3004.DAT', null],
            ['3004.dat', null],
            ['3010b', FileExtensionException::class],
            ['3010b.dat', null],
        ];
    }

    public function getLDrawTestData(): array
    {
        return [
            ['3176.dat', '3176'],
            ['3069B.DAT', '3069b'],
        ];
    }

    public function getLddTestData(): array
    {
        return [
            [3001, '3001'],
            [3069, '3069b'],
        ];
    }
}
