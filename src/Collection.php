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
        $this->lots[] = $lot;
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
