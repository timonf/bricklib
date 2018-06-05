<?php

declare(strict_types=1);

namespace BrickLib;

use RangeException;

class Lot
{
    /**
     * @var int
     */
    private $quantity = 1;

    /**
     * @var Brick
     */
    private $brick;

    private function __construct()
    {
    }

    public static function create(Brick $brick, int $quantity = 1): self
    {
        $instance = new self();
        $instance->brick = $brick;
        $instance->setQuantity($quantity);
        return $instance;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;

        if ($this->quantity < 0) {
            throw new RangeException('Quantity can\'t be less than 0');
        }
    }

    public function increaseQuantity(int $amount = 1): void
    {
        $this->setQuantity($this->getQuantity() + $amount);
    }

    public function decreaseQuantity(int $amount = 1): void
    {
        $this->setQuantity($this->getQuantity() - $amount);
    }

    public function getBrick(): Brick
    {
        return $this->brick;
    }
}
