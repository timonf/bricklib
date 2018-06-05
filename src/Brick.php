<?php

declare(strict_types=1);

namespace BrickLib;

final class Brick
{
    /**
     * @var Color
     */
    private $color;

    /**
     * @var Design
     */
    private $design;

    private function __construct()
    {
    }

    public static function create(Design $design, ?Color $color = null): self
    {
        $instance = new self();
        $instance->design = $design;
        $instance->color = $color instanceof Color ? $color : Color::create(Color::UNKNOWN);
        return $instance;
    }

    public function getColor(): Color
    {
        return $this->color;
    }

    public function getDesign(): Design
    {
        return $this->design;
    }
}
