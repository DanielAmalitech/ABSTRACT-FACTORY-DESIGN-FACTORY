<?php

use KitchenTable\KitchenTableInterface;
require_once '..\KitchenTable\KitchenTableInterface.php';

/**
 * defines abstract products (chairs family)
 */
interface ChairInterface
{
    /**
     * @param string $color
     * @return string
     */
    public function color(string $color): string;

    /**
     * @param float $width
     * @return float
     */
    public function width(float $width): float;

    /**
     * @param float $height
     * @return float
     */
    public function height(float $height): float;

    /**
     * @return string
     */
    public function getType() :string;

    /**
     * @param KitchenTableInterface $kitchenTable
     * @return string
     */
    public function kitchenTableCollaborate(KitchenTableInterface $kitchenTable) : string;

}
