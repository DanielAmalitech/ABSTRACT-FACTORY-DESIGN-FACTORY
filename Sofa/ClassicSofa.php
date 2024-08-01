<?php

namespace Sofa;

require_once 'SofaInterface.php';

class ClassicSofa implements SofaInterface
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