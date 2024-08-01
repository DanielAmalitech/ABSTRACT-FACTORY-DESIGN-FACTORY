<?php

namespace KitchenTable;

/**
 * defines abstract product ( kitchen table)
 */
interface KitchenTableInterface
{
    /**
     * @param string $color
     * @return string
     */
    public function color(string $color): string;

    /**
     * @param float $height
     * @return float
     */
    public function height(float $height): float;

    /**
     * @param float $width
     * @return float
     */
    public function width(float $width): float;

    /**
     * @return string
     */
    public function getType() :string;

    /**
     * @return string
     */
    public function chairCollaboration() : string;
}
