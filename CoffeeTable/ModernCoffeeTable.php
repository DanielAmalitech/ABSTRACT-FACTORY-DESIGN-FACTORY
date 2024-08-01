<?php

namespace CoffeeTable;

require_once 'CoffeeTableInterface.php';

/**
 * defines concrete products (coffee table family)
 * abstract products implemented (modern coffee table family)
 */
class ModernCoffeeTable implements CoffeeTableInterface
{

    /**
     * @inheritDoc
     */
    public function color(string $color): string
    {
        // TODO: Implement color() method.
        return $color;
    }

    /**
     * @inheritDoc
     */
    public function width(float $width): float
    {
        // TODO: Implement width() method.
        return $width;
    }

    /**
     * @inheritDoc
     */
    public function height(float $height): float
    {
        // TODO: Implement height() method.
        return $height;
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        // TODO: Implement getType() method.
        return get_called_class();
    }
}