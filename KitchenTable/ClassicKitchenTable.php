<?php

namespace KitchenTable;

require_once 'KitchenTableInterface.php';

class ClassicKitchenTable implements KitchenTableInterface
{

    /**
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
    public final function chairCollaboration(): string
    {
        // TODO: Implement chairCollaboration() method.
        return "The result of the Classic Kitchen Table.";
    }
}
