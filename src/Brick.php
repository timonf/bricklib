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

    public function matches(Brick $other): bool
    {
        return $other->getColor()->toBrickLinkColor() === $this->getColor()->toBrickLinkColor()
            && $other->getDesign()->toBrickLinkDesign() === $this->getDesign()->toBrickLinkDesign();
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
