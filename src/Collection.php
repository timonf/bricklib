<?php

declare(strict_types=1);

namespace BrickLib;

use ArrayIterator;
use Countable;
use IteratorAggregate;

class Collection implements IteratorAggregate, Countable
{
    /**
     * @var Lot[]
     */
    private $lots;

    private function __construct()
    {
        $this->lots = [];
    }

    public static function createEmptyCollection(): self
    {
        $instance = new self();
        return $instance;
    }

    public function add(Lot $lot): void
    {
        $matchFound = false;
        array_walk($this->lots, function (Lot $currentLot) use ($lot, &$matchFound) {
            if ($currentLot->getBrick()->matches($lot->getBrick())) {
                $matchFound = true;
                $currentLot->increaseQuantity($lot->getQuantity());
            }
        });

        if (false === $matchFound) {
            $this->lots[] = $lot;
        }
    }

    public function getIterator()
    {
        return new ArrayIterator($this->lots);
    }

    public function count()
    {
        return count($this->lots);
    }
}
