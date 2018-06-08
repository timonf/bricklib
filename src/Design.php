<?php

declare(strict_types=1);

namespace BrickLib;

use BrickLib\Exception\FileExtensionException;

final class Design
{
    // BrickLink alternatives for original LEGO Design Numbers
    private const BRICKLINK_NUMBERS = [
        // LDD => BrickLink
        32123 => 4265,  // Technic Bush 1/2 Smooth
        50746 => 54200, // Slope 30 1 x 1 x 2/3
        6141  => 4073,  // Plate, Round 1 x 1 Straight Side
        30057 => 4073,  // Plate, Round 1 x 1 Straight Side
        30039 => 3070,  // Tile 1 x 1 with Groove
        88409 => 3068,  // Tile 2 x 2 with Groove
        30070 => 3069,  // Tile 1 x 2 with Groove
        88630 => 3069,  // Tile 1 x 2 with Groove
        3044  => 3044,  // Slope 45 2 x 1 Double - with Inside Bar
    ];

    private const MOST_COMMON_BRICKLINK_VARIANTS = [
        4265 => 'c', // Technic Bush 1/2 Smooth
        2412 => 'b', // Tile, Modified 1 x 2 Grille with Bottom Groove / Lip
        3070 => 'b', // Tile 1 x 1 with Groove
        3068 => 'b', // Tile 2 x 2 with Groove
        3069 => 'b', // Tile 1 x 2 with Groove
        3044 => 'b', // Slope 45 2 x 1 Double - with Inside Bar
    ];

    /**
     * @var int
     */
    private $value;

    private function __construct()
    {
    }

    public static function fromLDrawFilename(string $lDrawFilename): self
    {
        $extensionOffset = strpos(strtolower($lDrawFilename), '.dat');

        if (false === $extensionOffset) {
            throw new FileExtensionException('dat', $lDrawFilename);
        }

        $part = substr($lDrawFilename, 0, $extensionOffset);
        $partNumber = (int) preg_replace('/[^0-9]/', '', $part);

        $instance = new self();
        $instance->value = $partNumber;

        return $instance;
    }

    public static function fromLddDesignNumber(int $lddDesignNumber): self
    {
        $value = $lddDesignNumber;

        if (isset(static::BRICKLINK_NUMBERS[$lddDesignNumber])) {
            $value = static::BRICKLINK_NUMBERS[$lddDesignNumber];
        }

        $instance = new self();
        $instance->value = $value;

        return $instance;
    }

    public function toBrickLinkDesign(): string
    {
        $value = (string) $this->value;

        if (isset(self::MOST_COMMON_BRICKLINK_VARIANTS[$this->value])) {
            $value .= self::MOST_COMMON_BRICKLINK_VARIANTS[$this->value];
        }

        return $value;
    }
}
