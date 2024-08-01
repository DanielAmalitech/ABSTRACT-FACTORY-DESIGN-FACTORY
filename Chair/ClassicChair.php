<?php

use KitchenTable\KitchenTableInterface;

require_once 'ChairInterface.php';
require_once '..\KitchenTable\KitchenTableInterface.php';

/**
 * defines concrete products (classic)
 * abstract products implemented (classic chairs family)
 */
class ClassicChair implements ChairInterface
{

    /**
     * @param string $color
     * @inheritDoc
     */
    public final function color(string $color): string
    {
        // TODO: Implement color() method.
        return $color;
    }

    /**
     * @param float $width
     * @inheritDoc
     */
    public final function width(float $width): float
    {
        // TODO: Implement width() method.
        return $width;
    }

    /**
     * @param float $height
     * @inheritDoc
     */
    public final function height(float $height): float
    {
        // TODO: Implement height() method.
        return $height;
    }

    /**
     * @inheritDoc
     */
    public final function getType(): string
    {
        // TODO: Implement getType() method.
        return get_called_class();
    }

    /**
     * @inheritDoc
     */
    public final function kitchenTableCollaborate(KitchenTableInterface $kitchenTable): string
    {
        // TODO: Implement kitchenTableCollaborate() method.
        $result = $kitchenTable->chairCollaboration();
        return "The result of the Classic Chair collaborating with the ({$result})";

    }
}
