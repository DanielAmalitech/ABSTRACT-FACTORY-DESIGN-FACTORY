<?php

namespace KitchenTable;
require_once 'KitchenTableInterface.php';

class RetroKitchenTable implements KitchenTableInterface
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
    public function height(float $height): float
    {
        // TODO: Implement height() method.
        return $height;
    }

    /**
     * @param float $width
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
    public function getType(): string
    {
        // TODO: Implement getType() method.
        return get_called_class();
    }

    /**
     * @inheritDoc
     */
    public final function chairCollaboration(): string
    {
        // TODO: Implement chairCollaboration() method.
        return "The result of the Retro Kitchen Table.";
    }
}
